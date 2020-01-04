
    var loc;
$(function() {
    $.contextMenu({
        selector: '.highlight1', 
        callback: function(key, options) {
            switch(key) {
                case "cin":
                    loc="single.guestInfo";
                    
                    break;
                case "cout":
                loc="double.guestInfo";
                    break;
                default:
                loc="default.guestInfo";
                
            }
            
          alert(loc);
            
        },
        items: {
            "cin": {name: "Check In", icon: "fa-check-circle"},
            "cout": {name: "Check Out", icon: "cut"},
            "quit1":"-----------",
 
            "assign":{name:"Assign"},
            "unsign":{name:"Un Assign"},
            "sep1": "---------",
            "quit": {name: "Quit", icon: function(){
                return 'context-menu-icon context-menu-icon-quit';
            }}
        }
    });
    
    // $('.context-menu-one').on('click', function(e){
    //     console.log('clicked', this);
    // })    
});
