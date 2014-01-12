<center>
    <!-- The slideshow at the top -->
            <div class="slideshow">
            <iframe src="/templates/slideshow.html" width="690" height="330" scrolling="no"></iframe>
        </div>
    
        </center>
            <div class="filter_Conents_advertisement">
                <div class="right-advertisement"></div>
                <div class="filters"></div>
                <center>
                    <div class="contents">
                        <?php
                            // Assigning html content to variables using single quotes is very sloppy. Need to fix this.
                            $item='<div class="one_fourth" name="macro_lenses">
                            <a href="http://camy.premiumcoding.com/product/set-of-macro-lenses/" title="Set of Macro Lenses">
                                <div class="recentimage" style="background-image: none; background-position: initial initial; background-repeat: initial initial;">
                                    <div class="image" style="background-image: none; background-position: initial initial; background-repeat: initial initial;">
                                        <img src="/images/photodune-2314452-rings-for-macro-photography-s-280x180.jpg" alt="Set of Macro Lenses" style="display: inline;">
                                    </div>
                                </div>
                            </a>
                            <div class="recentPrice">
                                <span class="price">
                                    <span class="from"></span>
                                    <del><span class="amount">$8.99</span></del>
                                    <ins><span class="amount">$5.59</span></ins>
                                </span>
                            </div>
                            <div class="recentCart">
                                <a href="http://camy.premiumcoding.com/product/set-of-macro-lenses/" rel="nofollow" data-product_id="5408" class="add_to_cart_button button product_type_variable">Select options</a>
                            </div>
                            <div class="recentdescription">
                                <span class="onsale">Sale!</span>
                                <h3><a href="http://camy.premiumcoding.com/product/set-of-macro-lenses/" title="">Set of Macro Lenses</a></h3>
                                <div class="shortDescription">
                                    <b>Lorem ipsum</b>&nbsp;dolor sit amet, cons adipiscing elit, sed&nbsp;<b>diam nonummy</b>&nbsp;nibh euismod tincidunt ut laoreet dolore magna aliq ...
                                </div>
                            </div>
                            <div class="recentLinkMore">
                                <a href="http://camy.premiumcoding.com/product/set-of-macro-lenses/" title="">View the Product</a>
                            </div>
                            <div class="bottomborder"></div>
                        </div>';
                            for($i = 0; $i < 16; $i++)
                            {
                                print($item);
                            }
                        ?>
			         </div>
                </center>
		</div>