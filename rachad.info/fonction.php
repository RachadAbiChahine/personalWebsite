<?php

function skills($skillName, $percent) {
    $progression = "";
    if(($percent<0)){
        $percent=0;
    }elseif (($percent>100)) {
        $percent=100;
    }
    
    if ($percent <= 40) {
        $progression = "progress-bar-danger";
    } elseif (($percent > 40) && ($percent <= 55)) {
        $progression = "progress-bar-warning";
    }
      elseif (($percent > 55) && ($percent < 80)) {
        $progression = "progress-bar-info";
    }  else {
        $progression="progress-bar-success";
    }
    return' <div class="progress">
                        <div class="progress-bar ' . $progression . '" role="progressbar" aria-valuenow="10" aria-valuemin="0" 
                        aria-valuemax="100" style="width:' . $percent . '%;">

                        </div>
                        <span class="progress-type">' . $skillName . '</span>
                        <span class="progress-completed">' . $percent . '%</span>
                    </div>';
}
