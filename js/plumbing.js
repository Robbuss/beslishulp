
function plumbing(){
jsPlumb.ready(function() {
 
var newInstance = jsPlumb.getInstance();
var strokeWidth = 2;
var orangeStroke = "#f38901";
var paintStyle = { stroke:orangeStroke, strokeWidth:strokeWidth };
var color = "#f38901",
    arrowCommon = { foldback:0.8, fillStyle:color, width:15 };

  // new instance --!>

  newInstance.importDefaults({
    Connector : [ "Straight"],
    Endpoint:[ "Dot", { radius:1 } ],
    EndpointStyle : { fill: color  },
    Anchors : [ "BottomCenter", "TopCenter" ],
    Overlays: [[ "Arrow", { location:1 }, arrowCommon ],],
    isDetachable: false,
  });
  
  newInstance.connect({
    source:"aanmelding", 
    target:"decision1", 
    paintStyle,
  });
  jsPlumb.draggable("aanmelding");

  newInstance.connect({
    source:"decision1", 
    target:"vraagverheldering", 
    paintStyle:{ stroke:orangeStroke, strokeWidth:strokeWidth }
  }); 
  newInstance.connect({
    source:"vraagverheldering", 
    target:"decision2", 
    paintStyle:{ stroke:orangeStroke, strokeWidth:strokeWidth }
  });
  newInstance.connect({
    source:"decision2", 
    target:"begeleiding", 
    paintStyle:{ stroke:orangeStroke, strokeWidth:strokeWidth }
  });
  newInstance.connect({
    source:"begeleiding", 
    target:"decision3", 
    paintStyle:{ stroke:orangeStroke, strokeWidth:strokeWidth }
  });
  newInstance.connect({
    source:"decision3", 
    target:"afsluiting", 
    paintStyle:{ stroke:orangeStroke, strokeWidth:strokeWidth }
  });  
  
  // new instance --!>
  newInstance.importDefaults({
    Connector : [ "Straight"],
    Endpoint:[ "Dot", { radius:1 } ],
    EndpointStyle : { fill: "#f38901"  },
    Anchors : [ "Right", "Left" ],
    isDetachable: false,
  });
  
  newInstance.connect({
    source:"decision1", 
    target:"eenmalig-advies", 
    paintStyle:{ stroke:orangeStroke, strokeWidth:strokeWidth }
  });
  newInstance.connect({
    source:"decision1", 
    target:"verwijzing", 
    paintStyle:{ stroke:orangeStroke, strokeWidth:strokeWidth }
  });
  // end instance --!>
  
  // new instance --!>
  newInstance.importDefaults({
    Connector : [ "Flowchart", {cornerRadius:10}],
    Endpoint:[ "Dot", { radius:1 } ],
    EndpointStyle : { fill: "#f38901"  },
    Anchors : [ "Right", "TopCenter" ],
    isDetachable: false,
  });
  
  newInstance.connect({
    source:"decision2", 
    target:"pgb", 
    paintStyle:{ stroke:orangeStroke, strokeWidth:strokeWidth }
  });
  newInstance.connect({
    source:"decision2", 
    target:"zin", 
    paintStyle:{ stroke:orangeStroke, strokeWidth:strokeWidth }
  });
  // end instance --!>
  
  // new instance --!>
  newInstance.importDefaults({
    Connector : [ "Flowchart", {cornerRadius:10}],    
    Endpoint:[ "Dot", { radius:1 } ],
    EndpointStyle : { fill: "#f38901"  },
    Anchors : [ "BottomCenter", "Right" ],
    isDetachable: false,
  });
  
  newInstance.connect({
    source:"pgb", 
    target:"decision3", 
    paintStyle:{ stroke:orangeStroke, strokeWidth:strokeWidth }
  });
  newInstance.connect({
    source:"zin", 
    target:"decision3", 
    paintStyle:{ stroke:orangeStroke, strokeWidth:strokeWidth }
  });
  // end instance --!>
  
  
  // new instance --!>
  newInstance.importDefaults({
    Connector : [ "Flowchart", {cornerRadius:10}],
    Endpoint:[ "Dot", { radius:1 } ],
    EndpointStyle : { fill: "#f38901"  },
    Anchors : [ "TopCenter", "Left" ],
    isDetachable: false,
  });
  
  newInstance.connect({
    source:"herindicatie", 
    target:"decision2", 
    paintStyle:{ stroke:orangeStroke, strokeWidth:strokeWidth }
  });
  // end instance --!>
    // new instance --!>
  newInstance.importDefaults({
    Connector : [ "Flowchart", {cornerRadius:10}],
    Endpoint:[ "Dot", { radius:1 } ],
    EndpointStyle : { fill: "#f38901"  },
    Anchors : [ "Left", "Right" ],
    isDetachable: false,
  });
  
  newInstance.connect({
    source:"decision3", 
    target:"herindicatie", 
    paintStyle:{ stroke:orangeStroke, strokeWidth:strokeWidth }
  });
  // end instance --!>
  
});
}