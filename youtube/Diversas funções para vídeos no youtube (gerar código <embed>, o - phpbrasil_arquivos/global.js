function toggleRetagForm()
{
    $$('div.tags').each(function(el) {
        Element.toggle(el);
    });
    Element.toggle('retag_form');
}

function flagItem(ctype, ctype_id)
{
    if (!confirm("Você tem certeza que quer suspender esse item?")) {
        return false;
    }
    var url = '/ajax?cat=flag-suspension&type=' + ctype + '&id=' + ctype_id;
    new Ajax.Request(url, {
       onComplete: function(req) {
           // display a result message
           if (req.responseText == 'TRUE') {
               var msg = 'Obrigado, o seu voto foi gravado.';
               var matches = $$('div#flag-item.' + ctype);
               if (matches.length == 1) {
                   Element.update(matches[0], msg);
               } else {
                   alert(msg);
               }
           } else {
               alert('Um erro foi encontrado. Tente novamente em alguns minutos.');
           }
       }
    });
}

function unflagAsCorrectAnswer(faq_id, hash, title)
{
    var url = '/ajax?cat=unflag-correct-answer&faq_id=' + faq_id;
    new Ajax.Request(url, {
       onComplete: function(req) {
           location.href = '/faq/' + hash + '/' + title + '?reload';
       } 
    });
}

function flagAsCorrectAnswer(faq_id, answer_id, hash, title)
{
    var url = '/ajax?cat=flag-correct-answer&faq_id=' + faq_id + '&answer_id=' + answer_id;
    new Ajax.Request(url, {
       onComplete: function(req) {
           location.href = '/faq/' + hash + '/' + title + '?reload';
       } 
    });
}

function clearTextarea(field)
{
    var check = 'Por favor só envie respostas';
    if (field.value.substr(0, check.length) == check) {
        field.value = '';
    }
    if (Element.hasClassName(field, 'warning')) {
        Element.removeClassName(field, 'warning');
    }
}

function addMiniComment(f)
{
    var div_id = 'mini-comment-' + f.target_type.value + '-' + f.target_id.value;

    var url = '/ajax';
    var options = {
        method: 'post',
        parameters: f.serialize(true),
        onComplete: function(req) {
            var total_comments = $$('div#' + div_id + ' div.mini-comment').length;
            var link_id = 'mini-comment-link-' + f.target_type.value + '-' + f.target_id.value;
            Element.update(link_id, 'coment&aacute;rios (' + total_comments + ')');
        }
    };
    new Ajax.Updater(div_id, url, options);

    return false;
}

function listMiniComments(ctype, ctype_id)
{
    var div_id = 'mini-comment-' + ctype + '-' + ctype_id;
    if (Element.visible(div_id)) {
        Element.hide(div_id);
        return;
    }
    
    // XXX: display a loading icon so users know what is going on
    var url = '/ajax?cat=list-mini-comments&type=' + ctype + '&id=' + ctype_id;
    new Ajax.Request(url, {
        onComplete: function(req) {
            Element.update(div_id, req.responseText);
            Element.show(div_id);
        }
    });
}

function showLoadingIcon(orig_el, pos)
{
    var opts = {};
    if (pos == 'before') {
        opts.before = '<img id="loading-icon" src="/images/spinner.gif" />';
    } else if (pos == 'top') {
        opts.top = '<img id="loading-icon" src="/images/spinner.gif" />';
    } else {
        opts.after = '<img id="loading-icon" src="/images/spinner.gif" />';
    }
    Element.insert(orig_el, opts);
}

function hideLoadingIcon()
{
    Element.remove('loading-icon');
}

function removeShot(link, shot_id)
{
    if (!confirm("Você tem certeza que quer remover essa screenshot?")) {
        return false;
    }
    showLoadingIcon(link, 'before');
    var url = '/ajax?cat=remove-screenshot&id=' + shot_id;
    new Ajax.Request(url, {
       onComplete: function(req) {
           if (req.responseText == 'TRUE') {
               var parag = $(link).up('p.screenshot');
               Element.remove(parag);
           }
           hideLoadingIcon();
       } 
    });
}

function removePageFromDB(link, page_id)
{
    if (!confirm("Você tem certeza que quer remover essa página?")) {
        return false;
    }
    var url = '/ajax?cat=remove-page&id=' + page_id;
    new Ajax.Request(url, {
       onComplete: function(req) {
           if (req.responseText == 'TRUE') {
               removePage(link);
           }
       } 
    });
}
function removePage(link)
{
    var parag = $(link).up('p.page');
    Element.remove(parag);
}

function addNewPage()
{
    var page_str = '<p class="page">';
    page_str += '<label>';
    page_str += '<a class="remove-page" href="javascript:void(null);" onclick="javascript:removePage(this);">remover</a>';
    page_str += 'P&aacute;gina: </label>';
    page_str += '<textarea name="pages[]" class="long"></textarea><br />';
    page_str += '<span class="note">(Voc&ecirc; pode usar tags como &lt;b&gt;, &lt;i&gt; ou &lt;code&gt;. URLs ser&atilde;o';
    page_str += 'convertidas para links automaticamente.)</span></p>';
    Element.insert('page-list', page_str);
}

function addNewScreenshot()
{
    var page_str = '<p class="screenshot">';
    page_str += '<label>Alias:</label>';
    page_str += '<input type="text" name="aliases[]" />';
    page_str += '<label for="file">Arquivo:</label>';
    page_str += '<input type="file" class="file" name="screenshots[]" />';
    page_str += '</p>';
    Element.insert('screenshot-list', page_str);
}

function deleteFileVersion(hash, title, version_id)
{
    if (!confirm("Você tem certeza que quer deletar esse arquivo?")) {
        return false;
    }
    var url = '/ajax?cat=delete-version&id=' + version_id;
    new Ajax.Request(url, {
        onComplete: function(req) {
            location.href = '/script/' + hash + '/' + title + '?reload';
        }
    });
}

function openCommentPage(ctype, ctype_id, page)
{
    var url = '/ajax?cat=comments&type=' + ctype + '&id=' + ctype_id + '&page=' + page;
    new Ajax.Updater('comment_pagination', url);
}

function vote(direction, ctype, ctype_id)
{
    var url = '/ajax?cat=vote&dir=' + direction + '&type=' + ctype + '&id=' + ctype_id;
    var div_id = 'vote-' + ctype + '-' + ctype_id;
    new Ajax.Updater(div_id, url);
}

function postComment(f)
{
    var url = '/ajax';
    var options = {
        method: 'post',
        parameters: $('new-comment').serialize(true)
    };
    new Ajax.Updater('comment_pagination', url, options);
    
    return false;
}

function hideNewSiteNote()
{
    setCookie('showNewSiteNote', 'false', 99999);
    Effect.Fade('new-site-note', {duration: 0.5});
}

function setCookie(c_name, value, expiredays)
{
    var exdate = new Date();
    exdate.setDate(exdate.getDate() + expiredays);
    document.cookie = c_name + "=" + escape(value) + 
            ((expiredays == null) ? "" : ";expires=" + exdate.toGMTString());
}

function getCookie(c_name)
{
    if (document.cookie.length > 0) {
        c_start = document.cookie.indexOf(c_name + "=");
        if (c_start != -1) {
            c_start = c_start + c_name.length + 1;
            c_end = document.cookie.indexOf(";", c_start);
            if (c_end == -1) {
                c_end = document.cookie.length;
            }
            return unescape(document.cookie.substring(c_start, c_end));
        }
    }
    return "";
}
