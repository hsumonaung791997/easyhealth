<?php 
	class Books {
      /* Member variables */
      var $price;
      var $title;
      
      /* Member functions */
      function setPrice($par){
         $this->price = $par;
      }
      
      function getPrice(){
         echo $this->price ."<br/>";
      }
      
      function setTitle($par){
         $this->title = $par;
      }
      
      function getTitle(){
         echo $this->title ." <br/>";
      }

      function __construct( $par1, $par2 ) 
      {
	   $this->title = $par1;
	   $this->price = $par2;
	  }
	  
    }


   	//Object create
	// $physics = new Books;
	// $maths = new Books;
	// $chemistry = new Books;

	// //Calling Member Function
	// $physics->setTitle( "Physics for High School" );
	// $chemistry->setTitle( "Advanced Chemistry" );
	// $maths->setTitle( "Algebra" );

	// $physics->setPrice( 10 );
	// $chemistry->setPrice( 15 );
	// $maths->setPrice( 7 );

	// $physics->getTitle();
	// $chemistry->getTitle();
	// $maths->getTitle();
	// $physics->getPrice();
	// $chemistry->getPrice();
	// $maths->getPrice();

	// echo "<hr>";
	//Constructor Functions
 	//Call function when object create
	
 	$physics = new Books( "Physics for High School", 10 );
	$maths = new Books ( "Advanced Chemistry", 15 );
	$chemistry = new Books ("Algebra", 7 );

	/* Get those set values */
	$physics->getTitle();
	$chemistry->getTitle();
	$maths->getTitle();

	$physics->getPrice();
	$chemistry->getPrice();
	$maths->getPrice();
?>