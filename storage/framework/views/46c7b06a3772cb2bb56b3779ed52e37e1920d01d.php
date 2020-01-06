<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .status{

        }
        .room_status{
            width: 20px;
            height: 20px;
            background-color: #2a88bd;
            text-align: left;
        }
        .roomNumColor{
            cursor: pointer;
        }
    </style>
</head>
<body>
<?php $__currentLoopData = $roomtypes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $type): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
    <tr>
        <td class="status"><?php echo e($type->roomtype); ?></td>
        <td class="roomTypeSpan" colspan="<?php echo e($month); ?>"><?php echo e($type->roomtype); ?></td>
    </tr>
    <?php $__currentLoopData = $rooms; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $room): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>

        <?php if($room->roomtype==$type->roomtype): ?>
            <tr>

                <td class="roomNumColor">

                    <?php echo e($room->roomumber); ?>

                </td>
                <?php for($i = 0; $i < $month; $i++): ?>
                    <td class="roomCell"></td>
                <?php endfor; ?>
            </tr>
        <?php endif; ?>

    <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
<?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
<script>

    var loc;
    $(function() {
        $.contextMenu({
            selector: '.roomNumColor',
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
                "status": {name: "Status", icon: "fa-check-circle"},
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

</script>
<script>
    $('.room_status').dbclick(function () {
       alert('click');
    });
</script>
</body>
</html>
