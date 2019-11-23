


    <div class="container">
            <div class="row">
                <div class="col-md-12">          
                   <h4><center>CAR LISTING</center></h4>

                   <form action="/search" method="POST" role="search">
                    {{ csrf_field() }}
                    <div class="input-group">Price Year :
                        <input type="text" class="form-control" name="q"
                            placeholder=""> <span class="input-group-btn">
                            <button type="submit" class="btn btn-default">
                                Submit
                            </button>
                        </span>
                    </div>
                </form>
                    <table style= "border: 1px solid #000000">
                         
                        <thead >
                            
                            <tr >
                                <th  rowspan= "2" style="width:130px">CAR NAME</th>
                                <th  colspan="5">YEARS</th>  
                            </tr>  
                            <tr>
                               <?php foreach($car_price as $comps) : ?>
                                <td><?php echo $comps->year; ?></td>
                                <?php endforeach; ?>
                            </tr> 
                            <tr>
                                    <?php foreach($car_price as $comps) : ?>
                                     <td><?php echo $comps->price; ?></td>
                                     <?php endforeach; ?>
                                 </tr>              
                           
                                                
                        </thead>
                  
                        <tbody>
                            <tr>
                          
                            </tr>
                            <tr>
                                    <?php foreach($car as $comps) : ?>
                                        <td>
                                            <?php echo $comps->car_name; ?>
                                        </td>   
                                                             
                                                               
                                       
                                        <tr></tr>   
                                    <?php endforeach; ?>     
                                    </tr>
                            
                        </tbody>
                    </table>                
                </div>
            </div>     
        </div>
    
   
    
   
    
    <html>


    