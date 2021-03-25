<?php
class biblioteca {
	//Definicion de la clase
	private $Autor;
	private $Tlibro;
	private $Nedicion;
	private $Lpublicacion;
	private $Editorial;
	private $Aedicion;
	private $Npaginas;
	private $notas;
	private $Isbn;

	//Metodo constructor
	function __construct($Autor='Steven', $Tlibro='Redes II', $Nedicion='4', $Lpublicacion='La Libertad', $Editorial='asd', $Aedicion='2015', 
		$Npaginas='238', $notas='Prueba', $Isbn='1233-11221-222'){
		/*El constructor inicializada los valors de las propiedades
		del metodo con los valores recibidos en los argumentos
		del metodo constructor*/
		$this->Autor = $Autor;
		$this->Tlibro = $Tlibro;
		$this->Nedicion = $Nedicion;
		$this->Lpublicacion = $Lpublicacion;
		$this->Editorial = $Editorial;
		$this->Aedicion = $Aedicion;
		$this->Npaginas = $Npaginas;
		$this->notas = $notas;
		$this->Isbn = $Isbn;		
	}
	//Metodos de la clase
	function mostrar(){
		/*El metodo mostrar() crea una tabla html donde se muestran
		los detalles del obtjeto */			
		$tabla = "\t<tr>\n\t\t<td style=\"text-align: right;\">\n\t\t\t" . $this->Autor ."\n\t\t</td>\n\t\t<td style=\"text-align: right;\">\n\t\t\t".$this->Tlibro."\n\t\t</td>\n\t\t<td style=\"text-align: right;\">\n\t\t\t".$this->Nedicion."<sup>a</sup>\n\t\t</td>\n\t\t<td style=\"text-align: right;\">\n\t\t\t".$this->Lpublicacion."\n\t\t</td>\n\t\t<td style=\"text-align: right;\">\n\t\t\t".$this->Editorial."\n\t\t</td>\n\t\t<td style=\"text-align: right;\">\n\t\t\t".$this->Aedicion."\n\t\t</td>\n\t\t<td style=\"text-align: right;\">\n\t\t\t".$this->Npaginas."\n\t\t</td>\n\t\t<td style=\"text-align: right;\">\n\t\t\t".$this->notas."\n\t\t</td>\n\t\t<td style=\"text-align: right;\">\n\t\t\t".$this->Isbn."\n\t\t</td>\n\t\t\t</tr>\n";

		echo $tabla;
	}
}
?>