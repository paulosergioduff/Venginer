/**
 * Adobe Edge: symbol definitions
 */
(function($, Edge, compId){
//images folder
var im='images/';

var fonts = {};


var resources = [
];
var symbols = {
"stage": {
   version: "2.0.0",
   minimumCompatibleVersion: "2.0.0",
   build: "2.0.0.250",
   baseState: "Base State",
   initialState: "Base State",
   gpuAccelerate: false,
   resizeInstances: false,
   content: {
         dom: [
         {
            id:'_0',
            type:'image',
            rect:['0px','0px','265px','90px','auto','auto'],
            fill:["rgba(0,0,0,0)",im+"0.png",'0px','0px']
         },
         {
            id:'_1',
            type:'image',
            rect:['0px','0px','265px','90px','auto','auto'],
            fill:["rgba(0,0,0,0)",im+"1.png",'0px','0px']
         },
         {
            id:'_2',
            type:'image',
            rect:['0px','0px','265px','90px','auto','auto'],
            opacity:0,
            fill:["rgba(0,0,0,0)",im+"23.png",'0px','0px']
         },
         {
            id:'_3',
            type:'image',
            rect:['0px','0px','265px','90px','auto','auto'],
            fill:["rgba(0,0,0,0)",im+"3.png",'0px','0px']
         },
         {
            id:'_4',
            type:'image',
            rect:['133','62','265px','90px','auto','auto'],
            opacity:0,
            fill:["rgba(0,0,0,0)",im+"4.png",'0px','0px']
         },
         {
            id:'_5',
            type:'image',
            rect:['0px','0px','265px','90px','auto','auto'],
            opacity:0,
            fill:["rgba(0,0,0,0)",im+"5.png",'0px','0px']
         },
         {
            id:'_6',
            type:'image',
            rect:['0px','0px','265px','90px','auto','auto'],
            fill:["rgba(0,0,0,0)",im+"6.png",'0px','0px']
         },
         {
            id:'_7',
            type:'image',
            rect:['333px','-29px','796px','171px','auto','auto'],
            fill:["rgba(0,0,0,0)",im+"7.png",'0px','0px'],
            transform:[]
         },
         {
            id:'_8',
            type:'image',
            rect:['0px','0px','265px','90px','auto','auto'],
            fill:["rgba(0,0,0,0)",im+"8.png",'0px','0px']
         }],
         symbolInstances: [

         ]
      },
   states: {
      "Base State": {
         "${__4}": [
            ["style", "top", '0px'],
            ["style", "opacity", '0'],
            ["style", "left", '0px']
         ],
         "${__3}": [
            ["style", "top", '0px'],
            ["style", "opacity", '0'],
            ["style", "left", '0px']
         ],
         "${__2}": [
            ["style", "top", '0px'],
            ["style", "opacity", '0'],
            ["style", "left", '0px']
         ],
         "${__5}": [
            ["style", "top", '0px'],
            ["style", "opacity", '0'],
            ["style", "left", '0px']
         ],
         "${__0}": [
            ["style", "left", '0px'],
            ["style", "top", '0px']
         ],
         "${__1}": [
            ["style", "top", '0px'],
            ["style", "opacity", '0'],
            ["style", "left", '0px']
         ],
         "${__8}": [
            ["style", "top", '0px'],
            ["style", "opacity", '0'],
            ["style", "left", '0px']
         ],
         "${_Stage}": [
            ["color", "background-color", 'rgba(255,255,255,1)'],
            ["style", "width", '265px'],
            ["style", "height", '90px'],
            ["style", "overflow", 'hidden']
         ],
         "${__7}": [
            ["style", "top", '-29px'],
            ["style", "left", '335px'],
            ["style", "width", '796px']
         ],
         "${__6}": [
            ["style", "top", '0px'],
            ["style", "opacity", '0'],
            ["style", "left", '0px']
         ]
      }
   },
   timelines: {
      "Default Timeline": {
         fromState: "Base State",
         toState: "",
         duration: 16000,
         autoPlay: true,
         timeline: [
            { id: "eid45", tween: [ "style", "${__7}", "left", '-212px', { fromValue: '335px'}], position: 13500, duration: 500 },
            { id: "eid54", tween: [ "style", "${__7}", "left", '-782px', { fromValue: '-212px'}], position: 15500, duration: 500 },
            { id: "eid25", tween: [ "style", "${__4}", "opacity", '1', { fromValue: '0.000000'}], position: 6750, duration: 500 },
            { id: "eid27", tween: [ "style", "${__4}", "opacity", '0', { fromValue: '1'}], position: 9000, duration: 500 },
            { id: "eid48", tween: [ "style", "${__8}", "opacity", '1', { fromValue: '0.000000'}], position: 14000, duration: 500 },
            { id: "eid51", tween: [ "style", "${__8}", "opacity", '0', { fromValue: '1'}], position: 15000, duration: 500 },
            { id: "eid15", tween: [ "style", "${__3}", "opacity", '1', { fromValue: '0.000000'}], position: 4500, duration: 500 },
            { id: "eid17", tween: [ "style", "${__3}", "opacity", '0', { fromValue: '1'}], position: 6750, duration: 500 },
            { id: "eid9", tween: [ "style", "${__2}", "opacity", '1', { fromValue: '0'}], position: 2250, duration: 500 },
            { id: "eid11", tween: [ "style", "${__2}", "opacity", '0', { fromValue: '1'}], position: 4500, duration: 500 },
            { id: "eid29", tween: [ "style", "${__5}", "opacity", '1', { fromValue: '0.000000'}], position: 9000, duration: 500 },
            { id: "eid31", tween: [ "style", "${__5}", "opacity", '0', { fromValue: '1'}], position: 11250, duration: 500 },
            { id: "eid3", tween: [ "style", "${__1}", "opacity", '1', { fromValue: '0.000000'}], position: 0, duration: 500 },
            { id: "eid8", tween: [ "style", "${__1}", "opacity", '0', { fromValue: '1'}], position: 2250, duration: 500 },
            { id: "eid33", tween: [ "style", "${__6}", "opacity", '1', { fromValue: '0.000000'}], position: 11250, duration: 500 },
            { id: "eid35", tween: [ "style", "${__6}", "opacity", '0', { fromValue: '1'}], position: 13500, duration: 500 }         ]
      }
   }
}
};


Edge.registerCompositionDefn(compId, symbols, fonts, resources);

/**
 * Adobe Edge DOM Ready Event Handler
 */
$(window).ready(function() {
     Edge.launchComposition(compId);
});
})(jQuery, AdobeEdge, "EDGE-229697765");
