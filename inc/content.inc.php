<div class="pos-f-t">
<div class="collapse" id="navbarToggleExternalContent">
  <div class="bg-dark p-4">
    <h5 class="text-white h4">Collapsed content</h5>
    <span class="text-muted">Toggleable via the navbar brand.</span>
  </div>
</div>
  <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
      <a class="navbar-brand" href="http://www.clark.edu/" target="_blank">Clark College</a>
      <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
          aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="collapsibleNavId">
          <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
              <li class="nav-item">
                  <a class="nav-link" href="https://github.com/bordyboy" target="_blank">Github</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="https://www.linkedin.com/in/bogdan-livadaru-32413119b/" target="_blank">Linkedin</a>
              </li>
          </ul>
      </div>
  </nav>
</div>
<div id="wrapper" class="container">
<div class="col-lg-12 text-center jumbotron mt-4">
  <h1>Temperature Converter</h1>
  <h4>CTEC 127 - PHP with SQL 1</h4>
  <p>This website can convert any temperature between Celsius, Farenheit, and Kelvin.</p>
</div>
  
      
      <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
          <div class="col-lg-12 ">
              <div class="row m-2 justify-content-center">
                  <div class="col-lg-6 text-center">						
                      <label for="temp">Temperature</label>						
                      <input class="form-control "  type="text" value="<?php if (isset($_POST['originaltemp'])) echo $_POST['originaltemp'];?>" name="originaltemp" size="7" maxlength="7" id="temp">				
                  </div>				
              </div>

              <div class="row m-2 justify-content-center">
                  <div class="col-lg-6">
                      <select name="originalunit" class="form-control">
                          <option value="--Select--"<?php if($originalUnit == "--Select--") echo ' selected="selected"';?>>-- Select --</option>
                          <option value="celsius"<?php if($originalUnit == "celsius") echo ' selected="selected"';?>>Celsius</option>
                          <option value="farenheit"<?php if($originalUnit == "farenheit") echo ' selected="selected"';?>>Farenheit</option>
                          <option value="kelvin"<?php if($originalUnit == "kelvin") echo ' selected="selected"';?>>Kelvin</option>
                      </select>
                  </div>
              </div>
              
          </div>
          
          <div class="col-lg-12">
              <div class="row m-2 justify-content-center">
                  <div class="col-lg-6 text-center">
                      <label for="convertedtemp">Converted Temperature</label>
                      <input type="text" class="form-control" readonly id="finalValue" value="<?php if (isset($_POST['originaltemp'])) echo round($convertedTemp, 1);?>" 
                      name="convertedtemp" size="7" maxlength="7" id="convertedtemp">
                  </div>
              </div>

              <div class="row m-2 justify-content-center">
                  <div class="col-lg-6">
                      <select name="conversionunit" class="form-control">
                          <option value="--Select--"<?php if($conversionUnit == "--Select--") echo ' selected="selected"';?>>-- Select --</option>
                          <option value="celsius"<?php if($conversionUnit == "celsius") echo ' selected="selected"';?>>Celsius</option>
                          <option value="farenheit"<?php if($conversionUnit == "farenheit") echo ' selected="selected"';?>>Farenheit</option>
                          <option value="kelvin"<?php if($conversionUnit == "kelvin") echo ' selected="selected"';?>>Kelvin</option>
                      </select>
                  <div class="row m-2 justify-content-center">
                      <!-- <button class="btn btn-info m-2" onclick="clipboard('cut')">Cut</button> -->
                  </div>
                  </div>
              </div>
              <div class="m-2 d-flex justify-content-center mx-auto">
                  <div class="btn-group">
                      <button type="submit" class="btn btn-primary">Convert</button>   
                      <button class="btn btn-info" onclick="clipboard('copy')">Copy</button>
                  </div>
              </div>
          </div>
      </form>
      <div class="row jumbotron">
          <div class="col-lg-6 ">
              <h2>Formulas Used:</h2>
              <h5>C: Celsius, F: Fahrenheit, K: Kelvin</h5>
              <ul>
                  <li>Fahrenheit to Celsius: C=5/9*(F-32)</li>
                  <li>Celsius to Fahrenheit: F=(9/5)*C+32</li>
                  <li>Kelvin to Fahrenheit: F=(9/5*(K-273.15))+32</li>
                  <li>Fahrenheit to Kelvin: K=(5/9*(F-32))+273.16</li>
                  <li>Kelvin to Celsius: C=K-273.16</li>
                  <li>Celsius to Kelvin: K=C+273.16</li>
              </ul>				
          </div>
          <div class="col-lg-6">
              <h2>Cool information about Celsius, Fahrenheit, and Kelvin:</h2>
              <p>These are simply different ways to express temperature, just as inches and centimeters are different ways to express length. Temperature has the additional attribute of a zero point that can be set at any place. </p>
              <p>Both Farenheit and Celcius have convenient values for normal human experience, with small numbers for our normal living conditions. The zero points for these scales are set to conditions that we can easily envision as “cold”.</p>
              <p>The Kelvin scale is useful for calculations in physics and chemistry because its zero point is the lowest possible temperature, and such calculatulations can be done without adjusting for an arbitrary zero point. <a href="https://www.quora.com/What-is-the-relationship-between-Celsius-Fahrenheit-and-Kelvin" target="_blank">Source</a> </p>
          </div>
      </div>
      
  
</div><!-- end wrapper div-->
