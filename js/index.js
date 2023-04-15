var interval;

function scrollMovD(){
  interval = setInterval(function(){ document.getElementById('scrollermov').scrollLeft += 1 }  , 5);
};
function scrollMovE(){
  interval = setInterval(function(){ document.getElementById('scrollermov').scrollLeft -= 1 }  , 5);
};

function scrollTVD(){
  interval = setInterval(function(){ document.getElementById('scrollertv').scrollLeft += 1 }  , 5);
};
function scrollTVE(){
  interval = setInterval(function(){ document.getElementById('scrollertv').scrollLeft -= 1 }  , 5);
};
function clearScroll(){
  clearInterval(interval);
};
