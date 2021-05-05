<?php


  $time = filter_input(INPUT_POST, 'timezone', FILTER_SANITIZE_STRING);
  $userForename = filter_input(INPUT_POST, 'fname', FILTER_SANITIZE_STRING);
  $userLastName = filter_input(INPUT_POST, 'lname', FILTER_SANITIZE_STRING);
  $reservationTime = filter_input(INPUT_POST, 'vreme', FILTER_SANITIZE_STRING);
  $people = filter_input(INPUT_POST, 'numberofpeople', FILTER_SANITIZE_NUMBER_INT);
  $telefon = filter_input(INPUT_POST, 'telbroj', FILTER_SANITIZE_NUMBER_INT);

  $notAvailable = ["2021-04-13", "2021-04-14", "2021-04-15"];
  foreach ($notAvailable as $termin) {
    if ($reservationTime === $termin) {
      die("Taj termin je zauzet");
    } 
    
  }
  $notAvailable[]= $reservationTime;
  # var_dump($notAvailable);

  echo "
    <h1>Hvala na rezervaciji, {$userForename} {$userLastName}</h1>
    <hr>
    <table>
      <tr>
        <td> Ime: </td>
        <td>{$userForename} </td>
      </tr>
      <tr>
        <td> Prezime: </td>
        <td>{$userLastName} </td>
      </tr>
      <tr>
        <td> Vreme rezervacije: </td>
        <td>{$reservationTime}  |  {$time}  |</td>
      </tr>
      <tr>
        <td> Broj ljudi : </td>
        <td> {$people}  </td>
      </tr>
      <tr>
        <td> Broj telefona: </td>
        <td> {$telefon} </td>
      </tr>
    </table>
  ";
?>