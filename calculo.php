<?php

function calcularpuntos (&$grupoa,&$brasil,&$camerun,&$espana,&$croacia){
        if (!empty($_POST)) {
         for ($i=0; $i<6; $i++){
              
              if ($grupoa [$i][1] > $grupoa [$i][2] ){
                    switch ($grupoa [$i][0] ) {
                        case "Brasil":
                            $brasil[0]="Brasil";
                            $brasil[1]++;
                            $brasil[2]=$brasil[2]+3;
                            $brasil[3]++;
                            $brasil[7]= $brasil[7]+$grupoa [$i][1];
                            $brasil[8]= $brasil[8]+$grupoa [$i][2];
                            $brasil[6]= $brasil[7]-$brasil[8] ;
                        break;
                        case "Camerun":
                             $camerun[0]="Camerun";
                            $camerun[1]++;
                            $camerun[2]=$camerun[2]+3;
                            $camerun[3]++;
                            $camerun[7]= $camerun[7]+$grupoa [$i][1];
                            $camerun[8]= $camerun[8]+$grupoa [$i][2];
                            $camerun[6]= $camerun[7]-$camerun[8] ;
                        break;
                        case "Espana":
                             $espana[0]="Espana";
                            $espana[1]++;
                            $espana[2]=$espana[2]+3;
                            $espana[3]++;
                            $espana[7]= $espana[7]+$grupoa [$i][1];
                            $espana[8]= $espana[8]+$grupoa [$i][2];
                            $espana[6]= $espana[7]-$espana[8] ;
                        break;
                        case "Croacia":
                            $croacia[0]="Croacia";
                            $croacia[1]++;
                            $croacia[2]=$croacia[2]+3;
                            $croacia[3]++;
                            $croacia[7]= $croacia[7]+$grupoa [$i][1];
                            $croacia[8]= $croacia[8]+$grupoa [$i][2];
                            $croacia[6]= $croacia[7]-$croacia[8] ;
					}	
				}
                    else {
                        if ($grupoa [$i][1] < $grupoa [$i][2]){
                            
                            switch ($grupoa [$i][0]) {
								case "Brasil":
								$brasil[0]="Brasil";
								$brasil[1]++;
								$brasil[5]++;
								$brasil[7]= $brasil[7]+$grupoa [$i][1];
								$brasil[8]= $brasil[8]+$grupoa [$i][2];
								$brasil[6]= $brasil[7]-$brasil[8] ;
								break;
								case "Camerun":
								$camerun[0]="Camerun";
								$camerun[1]++;
								$camerun[5]++;
								$camerun[7]= $camerun[7]+$grupoa [$i][1];
								$camerun[8]= $camerun[8]+$grupoa [$i][2];
								$camerun[6]= $camerun[7]-$camerun[8] ;
								break;
								case "Espana":
								$espana[0]="Espana";
								$espana[1]++;
								$espana[5]++;
								$espana[7]= $espana[7]+$grupoa [$i][1];
								$espana[8]= $espana[8]+$grupoa [$i][2];
								$espana[6]= $espana[7]-$espana[8] ;
								break;
								case "Croacia":
								$croacia[0]="Croacia";
								$croacia[1]++;
								$croacia[5]++;
								$croacia[7]= $croacia[7]+$grupoa [$i][1];
								$croacia[8]= $croacia[8]+$grupoa [$i][2];
								$croacia[6]= $croacia[7]-$croacia[8] ;
								break;
							}
                            
                            
                        }
								else{   
									if ($grupoa [$i][1] == $grupoa [$i][2] ){
										switch ($grupoa [$i][0]) {
											case "Brasil":
											$brasil[0]="Brasil";
											$brasil[1]++;
											$brasil[2]++;
											$brasil[4]++;
											$brasil[7]= $brasil[7]+$grupoa [$i][1];
											$brasil[8]= $brasil[8]+$grupoa [$i][2];
											$brasil[6]= $brasil[7]-$brasil[8] ;
                            
                                            break;
											case "Camerun":
											$camerun[0]="Camerun";
											$camerun[1]++;
											$camerun[2]++;
											$camerun[4]++;
											$camerun[7]= $camerun[7]+$grupoa [$i][1];
											$camerun[8]= $camerun[8]+$grupoa [$i][2];
											$camerun[6]= $camerun[7]-$camerun[8] ;
											break;
											case "Espana":
											$espana[0]="Espana";
											$espana[1]++;
											$espana[2]++;
											$espana[4]++;
											$espana[7]= $espana[7]+$grupoa [$i][1];
											$espana[8]= $espana[8]+$grupoa [$i][2];
											$espana[6]= $espana[7]-$espana[8] ;
											break;
											case "Croacia":
											$croacia[0]="Croacia";
											$croacia[1]++;
											$croacia[2]++;
											$croacia[4]++;
											$croacia[7]= $croacia[7]+$grupoa [$i][1];
											$croacia[8]= $croacia[8]+$grupoa [$i][2];
											$croacia[6]= $croacia[7]-$croacia[8] ;
										}
                            
                            
                            
									}
                        
								}         
                    
					}
			}  
									//Pregunto si perdió sumando perdidas
									for ($i=0; $i<6; $i++){
										if ($grupoa [$i][2] > $grupoa [$i][1] ){
											switch ($grupoa [$i][3] ) {
												case "Brasil":
													$brasil[0]="Brasil";
													$brasil[1]++;
													$brasil[2]=$brasil[2]+3;
													$brasil[3]++;
													$brasil[7]= $brasil[7]+$grupoa [$i][2];
													$brasil[8]= $brasil[8]+$grupoa [$i][1];
													$brasil[6]= $brasil[7]-$brasil[8] ;
												break;
												case "Camerun":
													 $camerun[0]="Camerun";
													$camerun[1]++;
													$camerun[2]=$camerun[2]+3;
													$camerun[3]++;
													$camerun[7]= $camerun[7]+$grupoa [$i][2];
													$camerun[8]= $camerun[8]+$grupoa [$i][1];
													$camerun[6]= $camerun[7]-$camerun[8] ;
												break;
												case "Espana":
												$espana[0]="Espana";
												$espana[1]++;
												$espana[2]=$espana[2]+3;
												$espana[3]++;
												$espana[7]= $espana[7]+$grupoa [$i][2];
												$espana[8]= $espana[8]+$grupoa [$i][1];
												$espana[6]= $espana[7]-$espana[8] ;
												break;
												case "Croacia":
												$croacia[0]="Croacia";
												$croacia[1]++;
												$croacia[2]=$croacia[2]+3;
												$croacia[3]++;
												$croacia[7]= $croacia[7]+$grupoa [$i][2];
												$croacia[8]= $croacia[8]+$grupoa [$i][1];
												$croacia[6]= $croacia[7]-$croacia[8] ;
											}		
										}	
										else {
											if ($grupoa [$i][2] < $grupoa [$i][1]){
												
												switch ($grupoa [$i][3]) {
											case "Brasil":
												$brasil[0]="Brasil";
												$brasil[1]++;
												$brasil[5]++;
												$brasil[7]= $brasil[7]+$grupoa [$i][2];
												$brasil[8]= $brasil[8]+$grupoa [$i][1];
												$brasil[6]= $brasil[7]-$brasil[8] ;
												
												
											break;
											case "Camerun":
												$camerun[0]="Camerun";
												$camerun[1]++;
												$camerun[5]++;
												$camerun[7]= $camerun[7]+$grupoa [$i][2];
												$camerun[8]= $camerun[8]+$grupoa [$i][1];
												$camerun[6]= $camerun[7]-$camerun[8] ;
											break;
											case "Espana":
												$espana[0]="Espana";
												$espana[1]++;
												$espana[5]++;
												$espana[7]= $espana[7]+$grupoa [$i][2];
												$espana[8]= $espana[8]+$grupoa [$i][1];
												$espana[6]= $espana[7]-$espana[8] ;
											break;
											case "Croacia":
												$croacia[0]="Croacia";
												$croacia[1]++;
												$croacia[5]++;
												$croacia[7]= $croacia[7]+$grupoa [$i][2];
												$croacia[8]= $croacia[8]+$grupoa [$i][1];
												$croacia[6]= $croacia[7]-$croacia[8] ;
												break;
										}
												
												
											}
											//Pregunto y sumo empates
											 else{   
												if ($grupoa [$i][2] == $grupoa [$i][1] ){
										switch ($grupoa [$i][3]) {
											case "Brasil":
												$brasil[0]="Brasil";
												$brasil[1]++;
												$brasil[2]++;
												$brasil[4]++;
												$brasil[7]= $brasil[7]+$grupoa [$i][2];
												$brasil[8]= $brasil[8]+$grupoa [$i][1];
												$brasil[6]= $brasil[7]-$brasil[8] ;
												
												
											break;
											case "Camerun":
												$camerun[0]="Camerun";
												$camerun[1]++;
												$camerun[2]++;
												$camerun[4]++;
												$camerun[7]= $camerun[7]+$grupoa [$i][2];
												$camerun[8]= $camerun[8]+$grupoa [$i][1];
												$camerun[6]= $camerun[7]-$camerun[8] ;
											break;
											case "Espana":
												$espana[0]="Espana";
												$espana[1]++;
												$espana[2]++;
												$espana[4]++;
												$espana[7]= $espana[7]+$grupoa [$i][2];
												$espana[8]= $espana[8]+$grupoa [$i][1];
												$espana[6]= $espana[7]-$espana[8] ;
											break;
											case "Croacia":
												$croacia[0]="Croacia";
												$croacia[1]++;
												$croacia[2]++;
												$croacia[4]++;
												$croacia[7]= $croacia[7]+$grupoa [$i][2];
												$croacia[8]= $croacia[8]+$grupoa [$i][1];
												$croacia[6]= $croacia[7]-$croacia[8] ;
										}
												
												
												
											}
											
								   }         
										
								}
							}
        

}}
?>