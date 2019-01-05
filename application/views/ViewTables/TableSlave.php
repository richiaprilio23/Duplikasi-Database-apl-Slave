
  <div class="content-wrapper">
            <section class="content-header">
                <h1>
                  <i class="fa fa-database" aria-hidden="true"></i>Slave Database
                  <small>Control panel</small>
                </h1>
            </section>
        <section class="content"> 
            <div class="row" >
<!-- START CONTENT -->
    		<div class=" ">
          <!-- <meta http-equiv="refresh" content="10" /> -->
            <div class="tabcontrol2" id="tab-control"> 

            		<ul class="tabs">
                  <?php
                    $nama = array('Hotel Bahagia', 'Hotel Camplong', 'Hotel Panglima','Hotel PKPRI','Hotel Rahmat');
                    $arrlength = count($nama); 
                  ?>
            			<?php for($y = 0; $y < $arrlength; $y++) { ?>
            				<li><a href="#<?php echo $y+1 ?>"><?php echo $nama[$y]; ?></a></li>
            				<?}?>
            		</ul>
            
            		<div class="frames">
                  <!-- Hotel Bahagia -->
            				<div class="frame table-responsive" id="1">
                      <table width="100%"> 
          							<tr>  
          								<td width="100%" valign="top">
                              <table id="example_table" class="dataTable striped border bordered" data-role="datatable" data-searching="true">
                                <h2>Hotel Bahagia</h2>
                                <thead>
                               <tr>
                                  <th class="sortable-column">No. Transaksi</th>
                                  <th class="sortable-column">No. Master Kamar</th>
                                  <th class="sortable-column">Nomor Reservasi Kamar</th>
                                  <th class="sortable-column">Lama Menginap</th>
                                  <th class="sortable-column">Transaksi Lunas ke</th>
                                  <th class="sortable-column">Nama Tamu</th>
                                  <th class="sortable-column">harga sewa kamar</th>
                                  <th class="sortable-column"><center> Status<br>(0 = Belum Lunas | 1 = Lunas)</center></th>
                                </tr>
                                </thead> 

                                <tbody>
                                    <?php
                                    $x=0;
                                    foreach ($query1->result() as $row){?>
                                    <tr> 
                                      <td><?php echo $row->t_detail_id ?></td>
                                      <td><?php echo $row->kategori_id ?></td>
                                      <td>No. (<?php echo $row->nama_barang ?>)</td>
                                      <td><?php echo $row->qty ?> hari</td>
                                      <td><?php echo $row->transaksi_id ?></td>
                                      <td><?php echo $row->nama_tamu ?></td>
                                      <td>Rp. <?php echo number_format ($row->harga,2) ?></td>
                                      <td><?php echo $row->status ?></td>
                                    </tr>
                                    <?php $x++; }?>
                                </tbody>
                              </table>
                          </td>
                          <td width="5%"></td>
          								<td width="35%">
          								</td>
          							</tr>
          						</table> 
            				</div>

                     <!-- Hotel Camplong -->
                    <div class="frame table-responsive" id="2">
                      <table width="100%">
                        <tr>
                          <td width="100%" valign="top">
                              <table id="example_table" class="dataTable striped border bordered" data-role="datatable" data-searching="true">
                                <h2>Hotel Camplong</h2>
                                <thead>
                                <tr>
                                  <th class="sortable-column">No. Transaksi</th>
                                  <th class="sortable-column">No. Master Kamar</th>
                                  <th class="sortable-column">Nomor Reservasi Kamar</th>
                                  <th class="sortable-column">Lama Menginap</th>
                                  <th class="sortable-column">Transaksi Lunas ke</th>
                                  <th class="sortable-column">Nama Tamu</th>
                                  <th class="sortable-column">harga sewa kamar</th>
                                  <th class="sortable-column"><center> Status<br>(0 = Belum Lunas | 1 = Lunas)</center></th>
                                </tr>
                                </thead>

                                <tbody>
                                    <?php
                                    $x=0;
                                    foreach ($query2->result() as $row){?>
                                   <tr> 
                                      <td><?php echo $row->t_detail_id ?></td>
                                      <td><?php echo $row->kategori_id ?></td>
                                      <td>No. (<?php echo $row->nama_barang ?>)</td>
                                      <td><?php echo $row->qty ?> hari</td>
                                      <td><?php echo $row->transaksi_id ?></td>
                                      <td><?php echo $row->nama_tamu ?></td>
                                      <td>Rp. <?php echo number_format ($row->harga,2) ?></td>
                                      <td><?php echo $row->status ?></td>
                                    </tr>
                                    <?php $x++; }?>
                                </tbody>

                                </thead>  
                              </table>
                          </td>
                          <td width="5%"></td>
                          <td width="35%">
                          </td>
                        </tr>
                      </table>
                    </div>

                    
                     <!-- Hotel Panglima -->
                    <div class="frame table-responsive" id="3">
                      <table width="100%">
                        <tr>
                          <td width="100%" valign="top">
                              <table id="example_table" class="dataTable striped border bordered" data-role="datatable" data-searching="true">
                                <h2>Hotel Panglima</h2>
                                <thead>
                               <tr>
                                  <th class="sortable-column">No. Transaksi</th>
                                  <th class="sortable-column">No. Master Kamar</th>
                                  <th class="sortable-column">Nomor Reservasi Kamar</th>
                                  <th class="sortable-column">Lama Menginap</th>
                                  <th class="sortable-column">Transaksi Lunas ke</th>
                                  <th class="sortable-column">Nama Tamu</th>
                                  <th class="sortable-column">harga sewa kamar</th>
                                  <th class="sortable-column"><center> Status<br>(0 = Belum Lunas | 1 = Lunas)</center></th>
                                </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $x=0;
                                    foreach ($query3->result() as $row){?>
                                    <tr> 
                                      <td><?php echo $row->t_detail_id ?></td>
                                      <td><?php echo $row->kategori_id ?></td>
                                      <td>No. (<?php echo $row->nama_barang ?>)</td>
                                      <td><?php echo $row->qty ?> hari</td>
                                      <td><?php echo $row->transaksi_id ?></td>
                                      <td><?php echo $row->nama_tamu ?></td>
                                      <td>Rp. <?php echo number_format ($row->harga,2) ?></td>
                                      <td><?php echo $row->status ?></td>
                                    </tr>
                                    <?php $x++; }?>
                                </tbody>
                                </thead>  
                              </table>
                          </td>
                          <td width="5%"></td>
                          <td width="35%">
                          </td>
                        </tr>
                      </table>
                    </div>
                     <!-- Hotel PKPRI -->
                    <div class="frame table-responsive" id="4">
                      <table width="100%">
                        <tr>
                          <td width="100%" valign="top">
                              <table id="example_table" class="dataTable striped border bordered" data-role="datatable" data-searching="true">
                                <h2>Hotel PKPRI</h2>
                                <thead>
                                <tr>
                                  <th class="sortable-column">No. Transaksi</th>
                                  <th class="sortable-column">No. Master Kamar</th>
                                  <th class="sortable-column">Nomor Reservasi Kamar</th>
                                  <th class="sortable-column">Lama Menginap</th>
                                  <th class="sortable-column">Transaksi Lunas ke</th>
                                  <th class="sortable-column">Nama Tamu</th>
                                  <th class="sortable-column">harga sewa kamar</th>
                                  <th class="sortable-column"><center> Status<br>(0 = Belum Lunas | 1 = Lunas)</center></th>
                                </tr>
                                </thead> 
                                <tbody>
                                    <?php
                                    $x=0;
                                    foreach ($query4->result() as $row){?>
                                    <tr> 
                                      <td><?php echo $row->t_detail_id ?></td>
                                      <td><?php echo $row->kategori_id ?></td>
                                      <td>No. (<?php echo $row->nama_barang ?>)</td>
                                      <td><?php echo $row->qty ?> hari</td>
                                      <td><?php echo $row->transaksi_id ?></td>
                                      <td><?php echo $row->nama_tamu ?></td>
                                      <td>Rp. <?php echo number_format ($row->harga,2) ?></td>
                                      <td><?php echo $row->status ?></td>
                                    </tr>
                                    <?php $x++; }?>
                                </tbody>
                                </thead>  
                              </table>
                          </td>
                          <td width="5%"></td>
                          <td width="35%">
                          </td>
                        </tr>
                      </table>
                    </div>
                     <!-- Hotel Rahmat -->
                    <div class="frame table-responsive" id="5">
                      <table width="100%">
                        <tr>
                          <td width="100%" valign="top">
                              <table id="example_table" class="dataTable striped border bordered" data-role="datatable" data-searching="true">
                                <h2>Hotel Rahmat</h2>
                                <thead>
                                <tr>
                                  <th class="sortable-column">No. Transaksi</th>
                                  <th class="sortable-column">No. Master Kamar</th>
                                  <th class="sortable-column">Nomor Reservasi Kamar</th>
                                  <th class="sortable-column">Lama Menginap</th>
                                  <th class="sortable-column">Transaksi Lunas ke</th>
                                  <th class="sortable-column">Nama Tamu</th>
                                  <th class="sortable-column">harga sewa kamar</th>
                                  <th class="sortable-column"><center> Status<br>(0 = Belum Lunas | 1 = Lunas)</center></th>
                                </tr>
                                </thead> 
                                <tbody>
                                    <?php
                                    $x=0;
                                    foreach ($query5->result() as $row){?>
                                    <tr> 
                                      <td><?php echo $row->t_detail_id ?></td>
                                      <td><?php echo $row->kategori_id ?></td>
                                      <td>No. (<?php echo $row->nama_barang ?>)</td>
                                      <td><?php echo $row->qty ?> hari</td>
                                      <td><?php echo $row->transaksi_id ?></td>
                                      <td><?php echo $row->nama_tamu ?></td>
                                      <td>Rp. <?php echo number_format ($row->harga,2) ?></td>
                                      <td><?php echo $row->status ?></td>
                                    </tr>
                                    <?php $x++; }?>
                                </tbody>
                                </thead>  
                              </table>
                          </td>
                          <td width="5%"></td>
                          <td width="35%">
                          </td>
                        </tr>
                      </table>
                    </div>

                  </div>
                </div>
        	</div>

<!-- END CONTENT -->
    	</div>
    </section>
</div>
</body>
</html>
