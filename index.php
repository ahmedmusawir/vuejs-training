<?php include "header.php" ?>

<nav>
  <div class="nav-wrapper">
    <a href="index.php" class="brand-logo">HOME</a>
    <ul id="nav-mobile" class="right hide-on-med-and-down">
      <li><a href="set-1.php">SET ONE</a></li>
      <li><a href="set-2.php">SET TWO</a></li>
      <li><a href="set-3.php">SET THREE</a></li>
    </ul>
  </div>
</nav>

<h3 class="center-align purple-text text-lighten-5">HOME</h3>  

<div id="app1">

  <div class="container the-box purple lighten-5 z-depth-2">
          <!-- Page Content goes here -->
          <h6 class="center-align purple lighten-4 purple-text text-lighten-2">{{ title }}</h6>
          <!--<div class="card-panel hoverable"> Hoverable Card Panel</div>-->
  </div>

</div>



<script type="text/javascript">
  
new Vue({
  el: '#app1',
  data: {
    title:   'Vue App 1',
    message: 'What the Mother Fuck'
  },
  methods: {
    randomGen: function() {
      this.numRnd = Math.random();
      return this.numRnd;
    },
    alertNow: function() {
      alert( this.message );
    }
  }
});

</script>


<div id="app2">

  <div class="container the-box purple lighten-5 z-depth-2">
          <!-- Page Content goes here -->
          <h6 class="center-align purple lighten-4 purple-text text-lighten-2">{{ title }}</h6>
          <!--<div class="card-panel hoverable"> Hoverable Card Panel</div>-->
  </div>

</div>



<script type="text/javascript">
  
new Vue({
  el: '#app2',
  data: {
    title:   'Vue App 2',
    message: 'What the Mother Fuck'
  },
  methods: {
    randomGen: function() {
      this.numRnd = Math.random();
      return this.numRnd;
    },
    alertNow: function() {
      alert( this.message );
    }
  }
});

</script>


<div id="app3">

  <div class="container the-box purple lighten-5 z-depth-2">
          <!-- Page Content goes here -->
          <h6 class="center-align purple lighten-4 purple-text text-lighten-2">{{ title }}</h6>
          <!--<div class="card-panel hoverable"> Hoverable Card Panel</div>-->
  </div>

</div>



<script type="text/javascript">
  
new Vue({
  el: '#app3',
  data: {
    title:   'Vue App 3',
    message: 'What the Mother Fuck'
  },
  methods: {
    randomGen: function() {
      this.numRnd = Math.random();
      return this.numRnd;
    },
    alertNow: function() {
      alert( this.message );
    }
  }
});

</script>

<?php include "footer.php" ?>

