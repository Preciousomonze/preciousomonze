<?php
  require ('~friend_vibes.php');
  require ('~outing_activities.php');

  // Always plan.
  plan_outing();

  if (precious_going() && (joke_going() && sodiq_going() && others_going())) {
    do_outing();
  }
?>
