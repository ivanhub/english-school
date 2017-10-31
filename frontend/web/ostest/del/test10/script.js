<!--
//rollovers...

if(document.images) {
     
		
		homeoff = new Image();
		homeoff.src = "images/homeoff.gif";
		homeover = new Image();
		homeover.src = "images/homeover.gif";
		
		
		startoff = new Image();
		startoff.src = "images/startoff.gif";
		startover = new Image();
	        startover.src = "images/startover.gif";
		
		
		conoff = new Image();
		conoff.src = "images/conoff.gif";
		conover = new Image();
		conover.src = "images/conover.gif";
		
                sdoff = new Image();
		sdoff.src = "images/sdoff.gif";
		sdover = new Image();
		sdover.src = "images/sdover.gif";
		  		
                mcoff = new Image();
		mcoff.src = "images/mcoff.gif";
		mcover = new Image();
		mcover.src = "images/mcover.gif";

                                                         desoff = new Image();
		desoff.src = "images/desoff.gif";
		desover = new Image();
		desover.src = "images/desover.gif";

                                         csoff = new Image();
		csoff.src = "images/csoff.gif";
		csover = new Image();
		csover.src = "images/csover.gif";
                                      
                                          winoff = new Image();
		winoff.src = "images/winoff.gif";
                       	winover = new Image();
		winover.src = "images/winover.gif";
}

function onoff(imgName,state) {
        if(document.images) {               
		document.images[imgName].src = eval(imgName+state+".src");
        }
}         
//-->