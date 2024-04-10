<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
              rel="stylesheet" 
              integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" 
              crossorigin="anonymous">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        <style>
           .custom-navbar {
             background-color: #38512F !important; /* Utilisation de la couleur verte spécifique en hexadécimal */
              }
            .custom-bold-text {
                font-weight: bold;
                            
             }
             #header {
               background-color: #38512F; 
               width: calc(100% - 14.08rem); 
               float: right;
              
                height: 70px;}
                
               
               #body {
                  background-color: #FEF5E7; /* Changer la couleur de fond de l'interface en #FEF5E7 */
                }
                .box {
                width: 500px;
                height: 700px;
                border: 2px solid green; /* Spécifie une bordure de 2 pixels de large, solide et rouge */
                position: absolute; /* Position absolue par rapport au corps */
                top: 70%; /* Place le haut de la boîte à 50% de la hauteur du corps */
                left: 60%; /* Place la gauche de la boîte à 50% de la largeur du corps */
                text-align: center;
                transform: translate(-50%, -50%); /* Centre la boîte horizontalement et verticalement */
                background-color: #38512F; 
                border-radius: 15px;
               
                }
                .box th, .box td {
            border: 1px solid #fff; /* Bordures des cellules */
            padding: 8px;
            
        }
           
        .box th {
            background-color: #f0f0f0 ; /* Couleur de fond pour les en-têtes */
            text-align: center;
        }
        

        .box td {
            background-color: #FEF5E7; /* Couleur de fond pour les cellules de données */
            /* text-align: left; */
            
        }
        .box table {
             border-collapse: collapse;
             width: 90%;
             margin: 0 auto;
             margin-top: 5px;
             border-radius: 15px;
             color: #000; /* Couleur du texte en noir */
    
         }
         
         
         
          .centered {
               text-align: left;
           }

         
        
        
       
       
       
       
       
       
       
           
            
        </style>


    </head>
   
    <body id="body">
         <header id="header">
            <nav class="navbar navbar-light ">
               <div class="container-fluid">
                   <a class="navbar-brand" href="#">
                     <img src="{{ asset('ImagesCoteEnseignant/Disponiblité.png') }}" 
                          width="32" height="32" class="d-inline-block align-text-top">
                       <span class="custom-bold-text text-white">Disponibilité</span>
                    </a>
               </div>
            </nav>
         </header>       
         <div class="box">
                  <strong class="custom-bold-text text-white text-center">Disponibilité</strong>
                  <div>
                    <img src="{{ asset('ImagesCoteEnseignant/Schedule-amico.png') }}" 
                          width="150" height="150" class="d-inline-block align-text-top">
                  </div>
                 
                 <table>
            <thead >
                <tr >
                    <th><img src="{{ asset('ImagesCoteEnseignant/7-jours (1).png') }}" 
                             width="30" height="30" class="d-inline-block align-text-top"></th>
                    <th>8h-10h</th>
                    <th>10h-12h</th>
                    <th>12h-14h</th>
                    <th>14h-16h</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="centered"><input type="checkbox">Samedi</td>
                    <td><input type="checkbox"></td>
                    <td><input type="checkbox"></td>
                    <td><input type="checkbox"></td>
                    <td><input type="checkbox"></td>
                                        
                </tr>
                <tr>
                    <td class="centered"><input type="checkbox">Dimanche</td>
                     <td><input type="checkbox"></td>
                     <td><input type="checkbox"></td>
                     <td><input type="checkbox"></td>
                     <td><input type="checkbox"></td>
                </tr>
                <tr>
                    <td class="centered"><input type="checkbox">Lundi</td>
                    <td><input type="checkbox"></td>
                    <td><input type="checkbox"></td>
                    <td><input type="checkbox"></td>
                    <td><input type="checkbox"></td>
                </tr>
                <tr>
                    <td class="centered"><input type="checkbox">Mardi</td>
                    <td><input type="checkbox"></td>
                    <td><input type="checkbox"></td>
                    <td><input type="checkbox"></td>
                    <td><input type="checkbox"></td>
                </tr>
                <tr>
                    <td class="centered"><input type="checkbox">Mercredi</td>
                    <td><input type="checkbox"></td>
                    <td><input type="checkbox"></td>
                    <td><input type="checkbox"></td>
                    <td><input type="checkbox"></td>
                </tr>
                <tr>
                     <td class="centered"><input type="checkbox">Jeudi</td>
                     <td><input type="checkbox"></td>
                     <td><input type="checkbox"></td>
                     <td><input type="checkbox"></td>
                     <td><input type="checkbox"></td>
                </tr>
                <!-- Ajoutez d'autres lignes selon vos besoins -->
            </tbody>
        </table>
       
        <button type="submit" class="btn btn-light  custom-btn" 
                style="font-weight: bold; color: dark; background-color: Gainsboro;margin-right: 20px;
                                              margin-top: 8px;width:30%;heigth:5%;margin-bottom: 50px;">Ajouter</button>
      
                                                   
        <button type="submit" class="btn btn-light custom-btn" 
                style="font-weight: bold; color: dark; background-color: Gainsboro;
                        margin-bottom: 50px;width:30%;heigth:5%;margin-top: 8px;">Modifier</button>

        
        



         </div>
         <div class="Bar">
           @include('BarreDeMenuEns')
         </div>
         
         
         
        
        
        
        
        
        

    </body>
</html>
   
   
   










  
   






  
   







  
   















   










  


  





  
  






  










 

 
 





 
 
 
 

 
 

 
 
 
 
 
 





   





   
   
   
   
   






   
   

   



   
   
   

   
   
   
   
   
   
    </body>
</html>
