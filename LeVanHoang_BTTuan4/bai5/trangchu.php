<hmtl>
    <head>
        <title>Trang chu</title>
        <link rel="stylesheet" href="public/css/style.php" type="text/css"/>
    </head>
    
    <body>
        <?php
        
            $products=	array(
                "p01" => array(
                    "name" => "Apple iPhone 5S Silver 16GB",

                    "price" => 219.95,

                    "desc" => "This Certified Refurbished product is tested and	
                        Certified to look and work like	new, with limited to No wear.	
                        The refurbishing process includes functionality	 testing,	
                        inspection, and repackaging. The product is backed by a	
                        minimum	90-day warranty, and may arrive	in a generic box.	
                        The product ships with a charger and cable, but does not	
                        include headphone, Manual or SIM card. Only select sellers	
                        who maintain a high performance bar may offer Certified	
                        Refurbished products on	Amazon.",

                    "image" => "iphone5s.jpg"
                ),
                
                "p02" => array(
                    "name" => "Apple iPhone 5C White 16GB",
                    
                    "price" => 183.95,
                    
                    "desc" => "Factory unlocked iPhones are GSM models and are
                        ONLY compatible	with GSM carriers like AT&T and T-Mobile	
                         as well as other GSM networks around	the	world. They WILL	
                         NOT WORK with CDMA carriers like Sprint, Verizon and the 
                         likes. The phone requires a nano SIM card (not included in the package).",
                    
                    "image" => "iphone5c.jpg"
                ),
                
                "p03" => array(
                    "name" => "Apple iPhone 6 16GB Space Grey",
                    
                    "price" => 449.99,
                    
                    "desc" => "Unlocked	cell phones are	compatible with GSM	
                        carriers like AT&T and T-Mobile as well as with GSM SIM	
                        cards (e.g. H20, Straight Talk, and select prepaid carriers).	
                        Unlocked cell phones will not work with	CDMA Carriers like	
                        Sprint,	Verizon, Boost or Virgin.",
                    
                    "image" => "iphone6"
                )
            );
            
            foreach ($products as $pro => $x){
                echo($x["name"."<br>"]);
                echo($x["price"."<br>"]);
                echo($x["desc"."<br>"]);
                echo($x["image"."<br>"]);
            }
            
           
            
        ?>
    </body>
</hmtl>