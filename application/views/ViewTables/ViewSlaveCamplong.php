<div class="content-wrapper">
  
            <section class="content-header">
                <h1>
                  <i class="fa fa-ticket" aria-hidden="true"></i>Slave Table Camplong
                  <small>Control panel</small>
                </h1>
            </section>

        <section class="content">
          <div class="cell auto-size padding20 bg-white" id="cell-content">
            <div class="row" >
<!-- START CONTENT -->
            <meta http-equiv="refresh" content="30" />
                <div class="frames">
                  <!-- Hotel Bahagia -->
                    <div class="frame">
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
    </section>
</div>
</body>
</html>
