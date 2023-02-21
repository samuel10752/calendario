(function (win, doc) {
    'use strict';

    //Exibir o calendario
    function getCalendar(perfil, div) 
    {
        let calendarEL = doc.querySelector(div);
        let calendar = new FullCalendar.Calendar(calendarEL, {
            initialView: 'dayGridMonth',
            headerToolbar: {
                start: 'prev,next,today',
                center: 'title',
                end: 'dayGridMonth, timeGridWeek, timeGridDay'
            },
            buttonText: {
                today: 'hoje',
                month: 'mês',
                week: 'semana',
                day: 'dia'
            },
            droppable:true,
            editable:true,
            locale: 'pt-br',
            eventDrop:function(info){
                resizeAndDrop(info);
            },
            eventResize:function(info){
                resizeAndDrop(info);
            },
            dateClick: function(info) {
                if(perfil == 'manager'){
                    calendar.changeView('timeGrid', info.dateStr);
                }else{
                    if(info.view.type == 'dayGridMonth'){
                        calendar.changeView('timeGrid', info.dateStr);
                    }else{
                        win.location.href=`/calendario/views/user/add.php?date=`+info.dateStr;
                    }
                }
                // alert('Clicked on: ' + info.dateStr);
                // alert('Coordinates: ' + info.jsEvent.pageX + ',' + info.jsEvent.pageY);
                // alert('Current view: ' + info.view.type);
                // // change the day's background color just for fun
                // info.dayEl.style.backgroundColor = 'red';
            },
            events: '../../controllers/ControllerEvents.php',
            eventClick: function (info) {
                if(perfil == 'manager'){
                    win.location.href=`/calendario/views/manager/editar.php?id=${info.event.id}`;            
                } 
            }

        });
        calendar.render();

    }

    if(doc.querySelector('.calendarUser')){
        getCalendar('user', '.calendarUser');
    }else if(doc.querySelector('.calendarManager')){
        getCalendar('manager', '.calendarManager');
    }

    if(doc.querySelector('#delete')){
        let btn=doc.querySelector('#delete');
        btn.addEventListener('click', (event)=>{
            event.preventDefault();
            if(confirm("Deseja mesmo apagar está Consulta?")){
                win.location.href=event.target.parentNode.href;
            }
        },false);
    }


    //Arraste e redimensionamento de eventos
    async function resizeAndDrop(info){
        let newDate = new Date(info.event.start);
        let month = ((newDate.getMonth()+1)<9)?"0"+(newDate.getMonth()+1):newDate.getMonth()+1;
        let day = ((newDate.getDate())<9)?"0"+newDate.getDate():newDate.getDate();
        let minutes = ((newDate.getMinutes())<9)?"0"+newDate.getMinutes():newDate.getMinutes();
        newDate = `${newDate.getFullYear()}-${month}-${day} ${newDate.getHours()}:${minutes}:00`

        let newDateEnd = new Date(info.event.end);
        let monthEnd = ((newDateEnd.getMonth()+1)<9)?"0"+(newDateEnd.getMonth()+1):newDateEnd.getMonth()+1;
        let dayEnd = ((newDateEnd.getDate())<9)?"0"+newDateEnd.getDate():newDateEnd.getDate();
        let minutesEnd = ((newDateEnd.getMinutes())<9)?"0"+newDateEnd.getMinutes():newDateEnd.getMinutes();
        newDateEnd = `${newDateEnd.getFullYear()}-${monthEnd}-${dayEnd} ${newDateEnd.getHours()}:${minutesEnd}:00`


        let reqs = await fetch('http://localhost/calendario/controllers/ControllerDrop.php',{
            method:'post',
            headers:{
                'Content-Type':'application/x-www-form-urlencoded'
            },
            body:`id=${info.event.id}&start=${newDate}&end=${newDateEnd}`
        });
        let ress = await reqs.json();
    }

})(window, document);