<?

/**
* Main Init.class.php -> non-game functions
*/
class init extends page
{
	$page = new page();
	
	function __construct(loggined)
	{
		
	}

	public function routeInit(){

		if(isset($_GET['url'])){
			$url = explode('/', rtrim($_GET['url'],'/'));	
				if(function_exists($url['0'])){			
					if(isset($url['1'])){
						$page->$url['0']($url['1']);
					}else{
						$page->$url['0']('');
					}
				}else{
					$page->error();
				}
		}else{ 
			$page->main('');		
		}		

	}

}


/**
* Extends of Init : ;
*/
class page
{
	
	public function error()
	{
		echo "Error";
	}

	function main($arg)
		{
			switch ($arg) {
				case '':
				{
			echo '
			 <div class="projects">	
		     <a href="/MCalculator">
			<div class="head-img">MCalculator 1.0</div>
			</a>
			</div>
			</div>
			';
			}
			break;
			default : echo '<div class="error404">Ошибка #404: Такой страницы не существует</div>';
				break;
			}
		}

	function __construct(argument)
	{
		# code...
	}


}









?>