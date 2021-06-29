<?php
function stage($stage, $start_date) {
  switch ($stage) {
    case "Planting":
      $Date = $start_date; 
      return date('Y-m-d', strtotime($Date. '+1 days'));
      break;
    case "Establishment":
      $randomNumber = rand(25,45);
      $Date = date('Y-m-d', strtotime($start_date. ' + 1 days'));
      return date('Y-m-d', strtotime($Date. ' + '.$randomNumber.' days'));
      //return $Date;
      break;
    case "SuckersSelection":
      $randomNumber = rand(60,180);
      $Date = date('Y-m-d', strtotime($start_date. ' + '.rand(25,45).' days'));
      return date('Y-m-d', strtotime($Date. ' + '.$randomNumber.' days'));
      break;
    case "Growth":
      $randomNumber = rand(60,90);
      $Date = date('Y-m-d', strtotime($start_date. ' + '.rand(100,220).' days'));
      return date('Y-m-d', strtotime($Date. ' + '.$randomNumber.' days'));
      break;
    case "Shooting":
      $randomNumber = rand(15,30);
      $Date = date('Y-m-d', strtotime($start_date. ' + '.rand(160,290).' days'));
      return date('Y-m-d', strtotime($Date. ' + '.$randomNumber.' days'));
      break;
    case "HandsOpening":
      $randomNumber = rand(15,30);
      $Date = date('Y-m-d', strtotime($start_date. ' + '.rand(315,330).' days'));
      return date('Y-m-d', strtotime($Date. ' + '.$randomNumber.' days'));
      break;
    case "BunchFilling":
      $randomNumber = rand(30,120);
      $Date = date('Y-m-d', strtotime($start_date. ' + '.rand(330,400).' days'));
      return date('Y-m-d', strtotime($Date. ' + '.$randomNumber.' days'));
      break;
    default:
      return "Your favorite color is neither red, blue, nor green!";
  }
}
if (isset($_GET['start_date'])) {
  $Planting = stage("Planting",$_GET['start_date']);
  $Establishment = stage("Establishment",$_GET['start_date']);
  $SuckersSelection = stage("SuckersSelection",$_GET['start_date']);
  $Growth = stage("Growth",$_GET['start_date']); echo ("<br>");
  $Shooting = stage("Shooting",$_GET['start_date']);
  $HandsOpening = stage("HandsOpening",$_GET['start_date']);
  $BunchFilling = stage("BunchFilling",$_GET['start_date']);
}

function calculatePercentage ($start, $end) {
     $start = new DateTime($start);
     $end = new DateTime($end);
     $today = new DateTime('now');

     $total = $start->diff($end);
     $current = $start->diff($today);

      return $percent_completed = round($current->days / $total->days * 100, 1);
}
  // echo $Planting;
  // echo $x = calculatePercentage ($Establishment, $BunchFilling);
  $x = rand(60,80);
  // echo $x;
?>
<?php
return array(
        array (
                'label' => 'Planting',
                'series' => array (
                        array (
                                'label' => '',
                                'allocations' => array (
                                        array (
                                                'label' => 'Planting',
                                                'start' => $_GET['start_date'],
                                                'end' => $Planting,
                                                'color' => '#00ff00',
                                                'url' => 'http://google.com',
                                        ),
                                ),
                        ),
                ),
        ),
        array (
                'label' => 'Establishment',
                'series' => array (
                        array (
                                'label' => '',
                                'allocations' => array (
                                        array (
                                                'label' => 'Establishment',
                                                'start' => date('Y-m-d', strtotime($Planting. '+1 days')),
                                                'end' => $Establishment,
                                                'color' => '#5c2406',
                                        ),
                                ),
                        ),
                ),
        ),
        array (
                'label' => 'SuckersSelection',
                'series' => array (
                        array (
                                'label' => '',
                                'allocations' => array (
                                        array (
                                                'label' => 'SuckersSelection',
                                                'start' => date('Y-m-d', strtotime($Establishment. '+1 days')),
                                                'end' => $SuckersSelection,
                                                'color' => '#f00018',
                                        ),
                                ),
                        ),
                ),
        ),
        array (
                'label' => 'Growth',
                'series' => array (
                        array (
                                'label' => '',
                                'allocations' => array (
                                        array (
                                                'label' => 'Growth',
                                                'start' => date('Y-m-d', strtotime($SuckersSelection. '+1 days')),
                                                'end' => $Growth,
                                                'color' => '#607514',
                                        ),
                                ),
                        ),
                ),
        ),
        array (
                'label' => 'Shooting',
                'series' => array (
                        array (
                                'label' => '',
                                'allocations' => array (
                                        array (
                                                'label' => 'Shooting',
                                                'start' => date('Y-m-d', strtotime($Growth. '+1 days')),
                                                'end' => $Shooting,
                                                'color' => '#10109c',
                                        ),
                                ),
                        ),
                ),
        ),
        array (
                'label' => 'HandsOpening',
                'series' => array (
                        array (
                                'label' => '',
                                'allocations' => array (
                                        array (
                                                'label' => 'HandsOpening',
                                                'start' => date('Y-m-d', strtotime($Shooting. '+1 days')),
                                                'end' => $HandsOpening,
                                                'color' => '#3a875e',
                                        ),
                                ),
                        ),
                ),
        ),
        array (
                'label' => 'BunchFilling',
                'series' => array (
                        array (
                                'label' => '',
                                'allocations' => array (
                                        array (
                                                'label' => 'BunchFilling',
                                                'start' => date('Y-m-d', strtotime($HandsOpening. '+1 days')),
                                                'end' => $BunchFilling,
                                                'color' => '#00ff00',
                                        ),
                                ),
                        ),
                ),
        ),
);

?>