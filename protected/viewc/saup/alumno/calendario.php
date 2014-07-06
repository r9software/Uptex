<?php
$alumno = new Alumno();
$usuario = new Usuario();
//echo "<pre>";
//print_r($alumno=$this->data['usuario'][0]);
//echo "</pre>";
$usuario = $this->data['usuario'][0];
$alumno = $this->data['usuario'][0]->Alumno[0];

//alumno
include (Doo::conf()->SITE_PATH . 'protected/viewc/saup/alumno/elementos/headerhome.php');
include (Doo::conf()->SITE_PATH . 'protected/viewc/saup/alumno/elementos/sidebar.php');
?>

<div class="main-content">
    <div class="calendar-env">

        <!-- Calendar Body -->
        <div class="calendar-body">

            <div id="calendar" style="color: black;"></div>


        </div>

        <!-- Sidebar -->


    </div>
    <script>
        $(document).ready(function() {
            function getRandomColor() {
    var letters = '0123456789ABCDEF'.split('');
    var color = '#';
    for (var i = 0; i < 6; i++ ) {
        color += letters[Math.floor(Math.random() * 16)];
    }
    return color;
}
            $('#calendar').fullCalendar({
                header: {
                    left: 'title',
                    right: 'month,agendaWeek,agendaDay today prev,next'
                },
                events: [
                     <?php
                     $cuenta=count($this->data["fecha"][0]);
                     $count=0;
                     foreach ($this->data["fecha"][0] as $fecha){ ?>
                    {
                       
                        title: '<?php echo $fecha->descripcion; ?>',
                        start: '<?php echo $fecha->fechaini; ?>',
                        end: '<?php echo $fecha->fechafin; ?>',
                        color:getRandomColor()
                     <?php 
                     
                     $count++;
                     ?>
                    }<?php
                     if ($count < $cuenta) {
                echo ',';
            }
        } ?>
                    
                    // etc...
                ],
            });
        });
    </script>
</div>
<?php
//alumno
include (Doo::conf()->SITE_PATH . 'protected/viewc/saup/alumno/elementos/footerhome.php');
?>