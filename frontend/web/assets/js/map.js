       
$(document).ready(function() {



ymaps.ready(init);

function init() {
    var groups = [
        {
            name: "Росакадемия, Центральный офис",
            descr: "443099, г. Самара, ул. Молодогвардейская 33, оф. 232. <br>График работы: 8:00 - 17:00 Пн.-Пт.<br/>Тел.: +7 (846) 255-69-99",
            items: [
                {
                    center: [53.182762,50.093797],
                    name: "",
                    num: 1
                },                
            ]},

        {
            name: "Новый учебный класс",
            descr: "г. Самара, ул. Осипенко 11, оф. 404. <br>График работы: 8:00-17:00 Пн.-Пт.<br/>Тел.: +7 (846) 255-69-99",
	    balloon: "г. Самара, <br>ул. Осипенко 11, оф. 404, <br/>тел.: (846) 255-69-99",
            items: [
                {
                    center: [53.205059, 50.137815],
                    name: "",
                    num:2
                },
                
            ]}
            
                
    ];


    var myMap = new ymaps.Map('map', {
            center: [53.205059, 50.137815],
            zoom: 13,
                    controls: ['smallMapDefaultSet']
                  //      controls: ['zoomControl', 'searchControl', 'typeSelector',  'fullscreenControl']
        }, {
            searchControlProvider: 'yandex#search'
        }),
counter=0,


   BalloonContentLayout = ymaps.templateLayoutFactory.createClass(
           '<div class="ballon"><img style="background: transparent;  border: none;border-radius: none;padding: 0px; margin-right: 3px;" src="images/map/logo2.png" class="ll"/><p style="padding-top: 7px;padding-left:68px;margin:7px 0px;">443099, г. Самара, <br>ул. Молодогвардейская 33, <br>оф. 232, тел.: (846) 255-69-99</p><img class="close" id="close" style="background: transparent;  border: none;border-radius: none;padding: 0px;" src="images/map/close.png"/></div>', {

         
            build: function () {
                BalloonContentLayout.superclass.build.call(this);
                                $('#close').bind('click', this.onCounterClick);

              
            },
            clear: function () {
         
                $('#close').unbind('click', this.onCounterClick);
                BalloonContentLayout.superclass.clear.call(this);
            },
                    onCounterClick: function () {
                                            myMap.balloon.close();

                
                },
            

        
        }),

 BalloonContentLayout2 = ymaps.templateLayoutFactory.createClass(
  '<div class="ballon" ><img style="background: transparent;  border: none;border-radius: none;padding: 0px; margin-right: 3px;" src="images/map/logo2.png" class="ll"/><p style="padding-top: 7px;padding-left:65px;margin:7px 0px;">'+ groups[1].balloon +'</p><img class="close" id="close" style="background: transparent;  border: none;border-radius: none;padding: 0px;" src="images/map/close.png"/></div>', {

            build: function () {
             
                BalloonContentLayout.superclass.build.call(this);
                                $('#close').bind('click', this.onCounterClick);

              
            },
            clear: function () {
             
                $('#close').unbind('click', this.onCounterClick);
                BalloonContentLayout.superclass.clear.call(this);
            },
                    onCounterClick: function () {
                                            myMap.balloon.close();

                
                },
            

        }),



        menu = $('<div class="panel-group" id="accordion"></div>');

            createMenuGroup(groups[0]);

    function createMenuGroup (group) {
    
    var goodItem1 = $('<div class="panel panel-default"><div class="panel-heading">  <h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion" href="#collapse1">' + groups[0].name + '</a>  </h4></div><div id="collapse1" class="panel-collapse collapse in"> <div class="panel-body"><b><a href="" onclick="myMap.panTo()">'+ groups[0].descr +'</a></b></div></div></div>'),
   goodItem2 = $('<div class="panel panel-default"><div class="panel-heading">  <h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion" href="#collapse1">' + groups[1].name + '</a>  </h4></div><div id="collapse1" class="panel-collapse collapse in"> <div class="panel-body"><b><a href="" onclick="myMap.panTo()">     '+ groups[1].descr +'</a></b></div></div></div>');

            collection = new ymaps.GeoObjectCollection(),
       

        myMap.geoObjects.add(collection);

 placemark = new ymaps.Placemark([53.182762,50.093797], {   hintContent: "Росавтоакадемия, Центральный офис"   },

 {             
            balloonContentLayout: BalloonContentLayout,
          
            balloonPanelMaxMapArea: 0, iconLayout: 'default#image',
          
            iconImageHref: 'images/map/icon22.png',
                iconImageSize: [50, 50],
           
            iconImageOffset: [-32, -50],
                  balloonContentSize: [290, 79],
                    balloonLayout: "default#imageWithContent",
                    balloonImageHref: 'images/map/ballon222.png',
                    balloonImageOffset: [-75, -90],
                    balloonImageSize: [280, 89],
                    balloonShadow: false,
                    balloonAutoPan: false,
                  //  balloonOffset:[20,0],

        });

  placemark2 = new ymaps.Placemark( [53.205059, 50.137815], {   hintContent: "Учебный Класс, Росавтоакадемия",   },

 {             
            balloonContentLayout: BalloonContentLayout2,
           
            balloonPanelMaxMapArea: 0, iconLayout: 'default#image',
 
            iconImageHref: 'images/map/icon22.png',
                iconImageSize: [50, 50],

            iconImageOffset: [-32, -50],
                  balloonContentSize: [290, 79],
                    balloonLayout: "default#imageWithContent",
                    balloonImageHref: 'images/map/ballon222.png',
                    balloonImageOffset: [-75, -90],
                    balloonImageSize: [280, 89],
                    balloonShadow: false,
                    balloonAutoPan: false,
		//	balloonOffset:[-150,0],

        });

 
      
        collection.add(placemark);
        collection.add(placemark2);

              goodItem1
             .appendTo(menu)
             .find('a') 
            .bind('click', function () {
              if (myMap.getZoom() < 13) {
             myMap.setZoom(15, { smooth: true }); }
             myMap.panTo([53.182762,50.093797], {
            flying: 1, callback: function () {  myMap.setZoom(15, { smooth: true });}
        });      


                if (!placemark.balloon.isOpen()) {                 
              //                          myMap.setCenter([53.182762,50.093797], 14);
                    placemark.balloon.open();                }

                return false;
            });

             goodItem2
             .appendTo(menu)
             .find('a') 
            .bind('click', function () {
           if (myMap.getZoom() < 13) {
             myMap.setZoom(15, { smooth: true }); }


          myMap.panTo([53.205059, 50.137815],  {
            flying: 2,callback: function () { myMap.setZoom(15, { smooth: true });}
        });
  //                  myMap.setCenter( [53.132978, 50.107227], 13);
// zoom callback: function () { map.setZoom(zoom, { smooth: true });}
                if (!placemark2.balloon.isOpen()) {
                    placemark2.balloon.open();
                } 

                return false;
            });



    }


    jQuery( ".start2" ).remove();
   
    menu.appendTo($('.START'));





myMap.events.add('click', function (e) {
        if (!myMap.balloon.isOpen()) {
            var coords = e.get('coords');
            myMap.balloon.open(coords, {
                contentHeader:'АНО ДПО "АКАДЕМИЯ"',
                contentBody:'<p>Запись на занятия по тел.:<br/>+7 (846) 255-69-99</p>' + [
                    ].join(', ') ,
                contentFooter:'<sup>Будем рады видеть вас на наших курсах</sup>'
            });
        }
        else {
            myMap.balloon.close();
        }
    });


    myMap.setBounds(myMap.geoObjects.getBounds(),{checkZoomRange:true,zoomMargin:100});
}

});

