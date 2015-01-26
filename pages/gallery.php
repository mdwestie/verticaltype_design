        <!-- Content -->
            <div class="span8">
				<h1>Gallery</h1>
					
				<h4>Markup</h4>
				
				<pre class="prettyprint linenums"><ol class="linenums"><li class="L0"><span class="tag">&lt;div</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"wrappGallery"</span><span class="tag">&gt;</span></li><li class="L1"><span class="pln"> </span><span class="tag">&lt;a</span><span class="pln"> </span><span class="atn">href</span><span class="pun">=</span><span class="atv">"href"</span><span class="pln"> </span><span class="atn">id</span><span class="pun">=</span><span class="atv">"prev"</span><span class="tag">&gt;</span><span class="tag">&lt;span&gt;</span><span class="tag">&lt;/span&gt;</span><span class="tag">&lt;/a&gt;</span></li><li class="L2"><span class="pln"> </span><span class="tag">&lt;a</span><span class="pln"> </span><span class="atn">href</span><span class="pun">=</span><span class="atv">"href"</span><span class="pln"> </span><span class="atn">id</span><span class="pun">=</span><span class="atv">"next"</span><span class="tag">&gt;</span><span class="tag">&lt;span&gt;</span><span class="tag">&lt;/span&gt;</span><span class="tag">&lt;/a&gt;</span></li><li class="L3"><span class="pln"> </span><span class="tag">&lt;div</span><span class="pln"> </span><span class="atn">id</span><span class="pun">=</span><span class="atv">"gallery"</span><span class="tag">&gt;</span></li><li class="L4"><span class="pln"> </span><span class="pln"> </span><span class="tag">&lt;div</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"wrapp-item"</span><span class="tag">&gt;</span></li><li class="L5"><span class="pln"> </span><span class="pln"> </span><span class="pln"> </span><span class="pln"> </span><span class="tag">&lt;a</span><span class="pln"> </span><span class="atn">href</span><span class="pun">=</span><span class="atv">"images/img1.jpg"</span><span class="tag">&gt;</span><span class="tag">&lt;img</span><span class="pln"> </span><span class="atn">src</span><span class="pun">=</span><span class="atv">"mages/img1.jpg"</span><span class="pun"> </span><span class="tag">/&gt;</span><span class="tag">&lt;/a&gt;</span></li><li class="L6"><span class="pln"> </span><span class="pln"> </span><span class="tag">&lt;/div</span><span class="tag">&gt;</span></li><li class="L4"><span class="pln"> </span><span class="pln"> </span><span class="tag">&lt;div</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"wrapp-item"</span><span class="tag">&gt;</span></li><li class="L5"><span class="pln"> </span><span class="pln"> </span><span class="pln"> </span><span class="pln"> </span><span class="tag">&lt;a</span><span class="pln"> </span><span class="atn">href</span><span class="pun">=</span><span class="atv">"images/img2.jpg"</span><span class="tag">&gt;</span><span class="tag">&lt;img</span><span class="pln"> </span><span class="atn">src</span><span class="pun">=</span><span class="atv">"mages/img2.jpg"</span><span class="pun"> </span><span class="tag">/&gt;</span><span class="tag">&lt;/a&gt;</span></li><li class="L6"><span class="pln"> </span><span class="pln"> </span><span class="tag">&lt;/div</span><span class="tag">&gt;</span></li><li class="L7"><span class="pln"> </span><span class="pln"> </span><span class="pln">...</span></li><li class="L8"><span class="pln"> </span><span class="tag">&lt;/div</span><span class="tag">&gt;</span></li><li class="L9"><span class="tag">&lt;/div</span><span class="tag">&gt;</span></li></ol></pre>
			
				<h4>Example gallery</h4>
				
                <?php
                    if(empty($_GET['pages'])) {
                        include 'grids/controls/slideshow.php'; 
                    } else  {
                        include 'grids/controls/' . htmlspecialchars($_GET["content"]) . '.php';
                    };
                ?>
            </div>
        </div>			
</div>


