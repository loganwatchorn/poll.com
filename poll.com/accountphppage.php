<?php

//v.1.0

  $post .= "
  <div class='pw'>

    <div class='pacwrapper'>
      <div class='pac'>
        <img src='profpicsample.jpg' />
        <h2>$added_by</h2>
      </div>
    </div>

    <div class='pq'>
      <h3>$q</h3>
    </div>

    <div class='postanswers'>
      <div><p class='pp'></p><p class='pa'>$a1</p></div>
      <div><p class='pp'></p><p class='pa'>$a2</p></div>
      <div><p class='pp'></p><p class='pa'>$a3</p></div>
      <div><p class='pp'></p><p class='pa'>$a4</p></div>
      <div><p class='pp'></p><p class='pa'>$a5</p></div>
    </div>

    <div class='pf'>
      <div class='pfc'>
        <h4>Comments:</h4>
        <h3>1738</h3>
      </div>
      <div class='pfv'>
        <h4>Votes:</h4>
        <h3>2657</h3>
      </div>
    </div>

  </div>
  ";


//v.2.0

if (is_null($a3)&&is_null($a4)&&is_null($a5)) {
  $post .= "
  <div class='pw'>

    <div class='pacwrapper'>
      <div class='pac'>
        <img src='profpicsample.jpg' />
        <h2>$added_by</h2>
      </div>
    </div>

    <div class='pq'>
      <h3>$q</h3>
    </div>

    <div class='postanswers'>
      <div><p class='pp'></p><p class='pa'>$a1</p></div>
      <div><p class='pp'></p><p class='pa'>$a2</p></div>
    </div>

    <div class='pf'>
      <div class='pfc'>
        <h4>Comments:</h4>
        <h3>1738</h3>
      </div>
      <div class='pfv'>
        <h4>Votes:</h4>
        <h3>2657</h3>
      </div>
    </div>

  </div>
  ";
}
else {
  if (is_null($a3)&&is_null($a4)&&!is_null($a5)) {
    $post .= "
    <div class='pw'>

      <div class='pacwrapper'>
        <div class='pac'>
          <img src='profpicsample.jpg' />
          <h2>$added_by</h2>
        </div>
      </div>

      <div class='pq'>
        <h3>$q</h3>
      </div>

      <div class='postanswers'>
        <div><p class='pp'></p><p class='pa'>$a1</p></div>
        <div><p class='pp'></p><p class='pa'>$a2</p></div>
        <div><p class='pp'></p><p class='pa'>$a5</p></div>
      </div>

      <div class='pf'>
        <div class='pfc'>
          <h4>Comments:</h4>
          <h3>1738</h3>
        </div>
        <div class='pfv'>
          <h4>Votes:</h4>
          <h3>2657</h3>
        </div>
      </div>

    </div>
    ";
  }
  else {
    if (!is_null($a3)&&is_null($a4)&&is_null($a5)) {
      $post .= "
      <div class='pw'>

        <div class='pacwrapper'>
          <div class='pac'>
            <img src='profpicsample.jpg' />
            <h2>$added_by</h2>
          </div>
        </div>

        <div class='pq'>
          <h3>$q</h3>
        </div>

        <div class='postanswers'>
          <div><p class='pp'></p><p class='pa'>$a1</p></div>
          <div><p class='pp'></p><p class='pa'>$a2</p></div>
          <div><p class='pp'></p><p class='pa'>$a3</p></div>
        </div>

        <div class='pf'>
          <div class='pfc'>
            <h4>Comments:</h4>
            <h3>1738</h3>
          </div>
          <div class='pfv'>
            <h4>Votes:</h4>
            <h3>2657</h3>
          </div>
        </div>

      </div>
      ";
    }
    else {
      if (!is_null($a3)&&is_null($a4)&&!is_null($a5)) {
        $post .= "
        <div class='pw'>

          <div class='pacwrapper'>
            <div class='pac'>
              <img src='profpicsample.jpg' />
              <h2>$added_by</h2>
            </div>
          </div>

          <div class='pq'>
            <h3>$q</h3>
          </div>

          <div class='postanswers'>
            <div><p class='pp'></p><p class='pa'>$a1</p></div>
            <div><p class='pp'></p><p class='pa'>$a2</p></div>
            <div><p class='pp'></p><p class='pa'>$a3</p></div>
            <div><p class='pp'></p><p class='pa'>$a5</p></div>
          </div>

          <div class='pf'>
            <div class='pfc'>
              <h4>Comments:</h4>
              <h3>1738</h3>
            </div>
            <div class='pfv'>
              <h4>Votes:</h4>
              <h3>2657</h3>
            </div>
          </div>

        </div>
      ";
      }
      else {
        if (!is_null($a3)&&!is_null($a4)&&is_null($a5)) {
          $post .= "
          <div class='pw'>

            <div class='pacwrapper'>
              <div class='pac'>
                <img src='profpicsample.jpg' />
                <h2>$added_by</h2>
              </div>
            </div>

            <div class='pq'>
              <h3>$q</h3>
            </div>

            <div class='postanswers'>
              <div><p class='pp'></p><p class='pa'>$a1</p></div>
              <div><p class='pp'></p><p class='pa'>$a2</p></div>
              <div><p class='pp'></p><p class='pa'>$a3</p></div>
              <div><p class='pp'></p><p class='pa'>$a4</p></div>
            </div>

            <div class='pf'>
              <div class='pfc'>
                <h4>Comments:</h4>
                <h3>1738</h3>
              </div>
              <div class='pfv'>
                <h4>Votes:</h4>
                <h3>2657</h3>
              </div>
            </div>

          </div>
          ";
        }
        else {
          if (!is_null($a3)&&!is_null($a4)&&!is_null($a5)) {
            $post .= "
            <div class='pw'>

              <div class='pacwrapper'>
                <div class='pac'>
                  <img src='profpicsample.jpg' />
                  <h2>$added_by</h2>
                </div>
              </div>

              <div class='pq'>
                <h3>$q</h3>
              </div>

              <div class='postanswers'>
                <div><p class='pp'></p><p class='pa'>$a1</p></div>
                <div><p class='pp'></p><p class='pa'>$a2</p></div>
                <div><p class='pp'></p><p class='pa'>$a3</p></div>
                <div><p class='pp'></p><p class='pa'>$a4</p></div>
                <div><p class='pp'></p><p class='pa'>$a5</p></div>
              </div>

              <div class='pf'>
                <div class='pfc'>
                  <h4>Comments:</h4>
                  <h3>1738</h3>
                </div>
                <div class='pfv'>
                  <h4>Votes:</h4>
                  <h3>2657</h3>
                </div>
              </div>

            </div>
            ";
          }
        }
      }
    }
  }
}

?>
