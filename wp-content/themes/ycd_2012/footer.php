</div>
        <div id="sidebar">
        	<div class="sidebox quickform">
            	<span class="sectionhead">Quick Search</span>
                <form>
                  <p>
                    <label for="manu"><span style="color:#f00; font-size:26px; font-weight:bold;">1.</span> Choose Manufacturer:</label>
                    <select name="manu" id="manu">
                      <option value="none">Select Manufacturer</option>
                      <option value="alfa-romeo-deals">Alfa Romeo</option>
                      <option value="audi-deals">Audi</option>
                      <option value="bmw-deals">BMW</option>
                      <option value="citroen-deals">Citroen</option>
                      <option value="fiat-deals">Fiat</option>
                      <option value="ford-deals">Ford</option>
                      <option value="honda-deals">Honda</option>
                      <option value="hyundai-deals">Hyundai</option>
                      <option value="jaguar-deals">Jaguar</option>
                      <option value="kia-deals">Kia</option>
                      <option value="land-rover-deals">Land Rover</option>
                      <option value="lexus-deals">Lexus</option>
                      <option value="mazda-deals">Mazda</option>
                      <option value="mercedes-benz-deals">Mercedes-Benz</option>
                      <option value="mini-deals">Mini</option>
                      <option value="mitsubishi-deals">Mitsubishi</option>
                      <option value="nissan-deals">Nissan</option>
                      <option value="peugeot-deals">Peugeot</option>
                      <option value="renault-deals">Renault</option>
                      <option value="seat-deals">SEAT</option>
                      <option value="skoda-deals">Skoda</option>
                      <option value="toyota-deals">Toyota</option>
                      <option value="vauxhall-deals">Vauxhall</option>
                      <option value="volkswagen-deals">Volkswagen</option>
                      <option value="volvo-deals">Volvo</option>
                    </select>
                  </p>
                  <p>
                  
                    <label for="model"><span style="color:#f00; font-size:26px; font-weight:bold;">2.</span> Choose Model:</label>
                    <select name="model" id="model" disabled="disabled">
                      <option>Select Manufacturer First</option>
                    </select>
                  </p>
                  <p class="quicksubp">
                    <a href="#" class="button" id="quicksub">Get Prices</a>
                  </p>
                </form>
            </div>
        
                <?php dynamic_sidebar( 'sidebar-1' ); ?>
				<div>
                	<div style="margin-left:10px;" class="socialicon"><a href="https://www.facebook.com/HoylakeVanSales"><img src="/images/facebook.jpg" alt="facebook"></a></div>
				</div>
        </div>
        <div class="clear"></div>
    </div>
    <div id="footer">
    	<?php wp_nav_menu( array( 'theme_location' => 'footer' ) ); ?>
        <p style="text-align:right; color: #FFF;">&copy <?php echo date("Y");?> HoylakeVanSales.co.uk</p>
    </div>
</div>
<?php wp_footer(); ?>
</body>
</html>