<?php

class FileReader
{
    protected $handler = null;
    protected $fbuffer = "";
    
    
    public function __construct($filename)
    {
        if(!($this->handler = fopen($filename, "r")))
            throw new Exception("Cannot open the file");
    }
    
    
    public function ReadAllLine()
    {
        while(!feof($this->handler))
            $this->fbuffer .= fgets($this->handler)."<br>";
        
        echo $this->fbuffer;
		printf("<br>");
    }
	public function ReadAllSymbol()
	{
        while(!feof($this->handler))
            $this->fbuffer .= fgetc($this->handler)."<br>";
        
        echo $this->fbuffer;
		printf("<br>");
	}
	public function ReplaceSymbol()
	{     
		$txt=$this->fbuffer;
		$str=ereg_replace('d','D',$txt);
		echo $str;
		printf("<br>");
	}
	public function ReplaceLine()
	{     
		$txt=$this->fbuffer;
		$str=str_replace('dsafdsfasdf','fffffffffff',$txt);
		echo $str;
		printf("<br>");
	}
	
    
    
    
}
?>