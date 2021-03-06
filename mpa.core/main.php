<?
class Render {
	private $Template = '/home/bitrix/s5/mpa.template/';
	private $Files = '/home/bitrix/s5/mpa.core/files/';
	private $Models = '/home/bitrix/s5/mpa.core/models/';
	private $Controlers = '/home/bitrix/s5/mpa.core/controlers/';
	private $Views = '/home/bitrix/s5/mpa.core/views/';
	
	public function Get() {
		$route = $this->Route();
    }
	
	private function Route() {
		$routes = explode('/', $_SERVER['REQUEST_URI']);
		$routes = array_diff($routes, array(''));
		$routes_count = count($routes);
		
		$final = end($routes); 
		$final_format = substr($final, -4);
		
		if ($final_format=='.php') {
			$type = 'file';
		}
		else {
			$type = 'path';
		}
		
		if ($routes_count==0) {
		
			if ($type=='file') {
				include($this->Models.'main/main.php');
				include($this->Controlers.'main/main.php');
				include($this->Template.'header.php'); 
				include($this->Files.$final);
				include($this->Template.'footer.php'); 
			}
			else if ($type=='path') {
				include($this->Models.'main/main.php');
				include($this->Template.'header.php'); 
				include($this->Views.'main/main.php');
				include($this->Template.'footer.php'); 
			}
		}
		else if ($routes_count==1) {
			if ($type=='file') {
				include($this->Models.'main/main.php');
				include($this->Template.'header.php'); 
				include($this->Files.$final);
				include($this->Template.'footer.php'); 
			}
			else if ($type=='path') {
				include($this->Models.$routes[1].'/'.$routes[1].'.php');
				include($this->Template.'header.php'); 
				include($this->Views.$routes[1].'/'.$routes[1].'.php');
				include($this->Template.'footer.php'); 
			}
		}
		else if ($routes_count==2) {
			if ($type=='file') {
				include($this->Models.'main/main.php');
				include($this->Template.'header.php'); 
				include($this->Files.$final);
				include($this->Template.'footer.php'); 
			}
			else if ($type=='path') {
				include($this->Models.$routes[1].'/'.$routes[2].'.php');
				include($this->Template.'header.php'); 
				include($this->Views.$routes[1].'/'.$routes[2].'.php');
				include($this->Template.'footer.php'); 
			}
		}
		else if ($routes_count>2) {
			
			if ($type=='file') {
				include($this->Models.'main/main.php');
				include($this->Template.'header.php'); 
				include($this->Files.$final);
				include($this->Template.'footer.php'); 
			}
			else if ($type=='path') {				
				$i = 0;
				$ii = 0;
				foreach ($routes as $route) {
					$i++;
					if ($i>2) {
						$ii++;
						$_GET[$ii]=$route;
					}
				}
				
				include($this->Models.$routes[1].'/'.$routes[2].'.php');
				include($this->Template.'header.php'); 
				include($this->Views.$routes[1].'/'.$routes[2].'.php');
				include($this->Template.'footer.php'); 
			}
		
		}
	}
}
?>