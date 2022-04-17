<div class="cardbox">
<table class="table table-striped table-dark">
  <thead>
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Phone</th>
      <th scope="col">Subject</th>
      <th scope="col">Message</th>
      <th scope="col">Sent in</th>
    </tr>
  </thead>
  <tbody>
    <?
        foreach($rows as $row){
            ?>
                <tr>
                <td>
                        <? if($row['is_guest']==1)
                        {
                            print_r('Guest');
                        }
                        else{
                            print_r($row['name']);
                        }
                        ?>
                    </td>
                    <td>
                        <?
                            print_r($row['email']) 
                        ?>
                    </td>
                    <td>
                        <?
                            print_r($row['phone']) 
                        ?>
                    </td>
                    <td>
                        <?
                            print_r($row['subject']) 
                        ?>
                    </td>
                    <td>
                        <?
                            print_r($row['message']) 
                        ?>
                    </td>
                    <td>
                        <?
                            print_r($row['send_date']) 
                        ?>
                    </td>
                </tr>
            <?
        }

    ?>
  </tbody>
</table>
</div>