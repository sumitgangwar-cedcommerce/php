<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $products = array(
            "Electronics" => array(
              "Television" => array(
                array(
                "id" => "PR001",
                "name" => "MAX-001",
                "brand" => "Samsung"
                ),
                array(
                "id" => "PR002",
                "name" => "BIG-301",
                "brand" => "Bravia"
                ),
                array(
                "id" => "PR003",
                "name" => "APL-02",
                "brand" => "Apple"
                )
              ),
              "Mobile" => array(
                array(
                "id" => "PR004",
                "name" => "GT-1980",
                "brand" => "Samsung"
                ),
                array(
                "id" => "PR005",
                "name" => "IG-5467",
                "brand" => "Motorola"
                ),
                array(
                "id" => "PR006",
                "name" => "IP-8930",
                "brand" => "Apple"
                )
              )
            ),
            "Jewelry" => array(
              "Earrings" => array(
                array(
                "id" => "PR007",
                "name" => "ER-001",
                "brand" => "Chopard"
                ),
                array(
                "id" => "PR008",
                "name" => "ER-002",
                "brand" => "Mikimoto"
                ),
                array(
                "id" => "PR009",
                "name" => "ER-003",
                "brand" => "Bvlgari"
                )
              ),
              "Necklaces" => array(
                array(
                "id" => "PR010",
                "name" => "NK-001",
                "brand" => "Piaget"
                ),
                array(
                "id" => "PR011",
                "name" => "NK-002",
                "brand" => "Graff"
                ),
                array(
                "id" => "PR012",
                "name" => "NK-003",
                "brand" => "Tiffany"
                )
              )
            )
                );

    echo "<table>
            <tr>
                <th>Category</th>
                <th>Subategory</th>
                <th>ID</th>
                <th>Name</th>
                <th>Brand</th>
            </tr>";
    foreach($products as $cat1=>$val1){
        foreach($val1 as $cat2=>$val2){
            foreach($val2 as $cat3=>$val3){
                echo "<tr>";
                echo "<td>".$cat1."</td>";
                echo "<td>".$cat2."</td>";
                foreach($val3 as $cat4=>$val4){
                    echo "<td>".$val4."</td>";
                }
                echo "</tr>";
            }
        }
    };

    echo "</table>"."<br><br>";
    echo "<table>
            <tr>
                <th>Category</th>
                <th>Subategory</th>
                <th>ID</th>
                <th>Name</th>
                <th>Brand</th>
            </tr>";
    foreach($products as $cat1=>$val1){
        foreach($val1 as $cat2=>$val2){
            if($cat2=="Mobile"){
                foreach($val2 as $cat3=>$val3){
                    echo "<tr>";
                    echo "<td>".$cat1."</td>";
                    echo "<td>".$cat2."</td>";
                    foreach($val3 as $cat4=>$val4){
                        echo "<td>".$val4."</td>";
                    }
                    echo "</tr>";
                }
            }
        }
    };
    echo "</table>"."<br><br>";
    
    foreach($products as $cat1=>$val1){
        foreach($val1 as $cat2=>$val2){
            foreach($val2 as $cat3=>$val3){ 
                $counter = -1;
                $temp = 0;
                foreach($val3 as $cat4=>$val4){
                    if($val3['brand']=='Samsung'){
                        if($temp==0)    echo "<ul>";
                        $counter++;
                        if($counter==0)    echo "<li>Product ID: ".$val4."</li>";
                        if($counter==1) echo "<li>Product Name: ".$val4."</li>";
                        if($temp==1){
                            echo "<li>Product Subcategory:".$cat2."</li>";
                            echo "<li>Product Category: ".$cat1."</li>";
                            
                        }
                        $temp++;
                    }
                }
                echo "</ul>";
            }
        }
    };

    
    // $elec = array("Electronics" , "Jwellery");
    // $sub_cat = array("Television" , "Mobile");

//    unset($products['Electronics']['Television'][2]['id']);
//    print_r ($products);

foreach($products as $cat1=>$val1){
    foreach($val1 as $cat2=>$val2){
        foreach($val2 as $cat3=>$val3){
            foreach($val3 as $cat4=>$val4){
                if($val4=="PR003"){
                    unset($products[$cat1][$cat2][$cat3][$cat4]);
                    break;
                }
            }
            
        }
    }
};
echo "<table>
            <tr>
                <th>Category</th>
                <th>Subategory</th>
                <th>ID</th>
                <th>Name</th>
                <th>Brand</th>
            </tr>";
    foreach($products as $cat1=>$val1){
        foreach($val1 as $cat2=>$val2){
            foreach($val2 as $cat3=>$val3){
                echo "<tr>";
                echo "<td>".$cat1."</td>";
                echo "<td>".$cat2."</td>";
                foreach($val3 as $cat4=>$val4){
                    echo "<td>".$val4."</td>";
                }
                echo "</tr>";
            }
        }
    };

    echo "</table>"."<br><br>";
echo "<br><br>";

foreach($products as $cat1=>$val1){
    foreach($val1 as $cat2=>$val2){
        foreach($val2 as $cat3=>$val3){
            foreach($val3 as $cat4=>$val4){
                if($val4=="PR002"){
                    $products[$cat1][$cat2][$cat3]["name"] = "BIG-555";
                    break;
                }
            }
            
        }
    }
};
echo "<table>
            <tr>
                <th>Category</th>
                <th>Subategory</th>
                <th>ID</th>
                <th>Name</th>
                <th>Brand</th>
            </tr>";
    foreach($products as $cat1=>$val1){
        foreach($val1 as $cat2=>$val2){
            foreach($val2 as $cat3=>$val3){
                echo "<tr>";
                echo "<td>".$cat1."</td>";
                echo "<td>".$cat2."</td>";
                foreach($val3 as $cat4=>$val4){
                    echo "<td>".$val4."</td>";
                }
                echo "</tr>";
            }
        }
    };

    echo "</table>"."<br><br>";

//    echo "<br><br>";
//    $products['Electronics']['Television'][1]['name'] = "BIG-555";
//    print_r ($products);
    
    

    
    ?>                
</body>
</html>