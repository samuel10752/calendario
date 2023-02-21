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
            locale: 'pt-br',
            events: '../../controllers/ControllerEvents.php',
            selectable:true,
            select: async (arg)=>{
                console.log(arg);
                let title=prompt('Nome do Evento:');
                if(title){
                    let response=await fetch('http://localhost/calendario/controllers/ControllerSelectable.php',{
                        method:'post',
                        headers:{
                            'Content-Type':'application/json',
                            'Accept':'application/json'
                        },
                        body:JSON.stringify({
                            title:title,
                            start:arg.start,
                            end:arg.end,
                        })
                    })
                    if(response.status ==200){
                        window.location.href="http://localhost/calendario/views/selectable/";
                    }
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


})(window, document);
