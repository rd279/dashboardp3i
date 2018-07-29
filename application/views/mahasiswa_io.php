<!DOCTYPE html>
<html lang="en">

<?php
$this->load->view('bar/head');
?>

        <!-- Page wrapper  -->
        <div class="page-wrapper">
            <!-- Bread crumb -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-primary">Data Mahasiswa (IO)</h3> </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo site_url('dashboard') ?>">Dashboard</a></li>
                        <li class="breadcrumb-item active">Data Mahasiswa (IO)</li>
                    </ol>
                </div>
            </div>
            <!-- End Bread crumb -->
            <!-- Container fluid  -->
            <div class="container-fluid">
                <!-- Start Page Content -->
                <div class="row">
                    <div class="col-md-12">
                        <?php 
                        $sms = $this->session->flashdata('msg');
                        if($this->session->userdata('msg') != ""){
                            echo '
                            <div class="alert alert-danger alert-dismissible fade show">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <strong>Error!</strong> '.$sms.'
                            </div>
                            ';
                        }
                        
                        ?> 
                            <div class="card">
                                <div class="card-body">
                                    <form action="<?php echo site_url('mahasiswa_io')?>" class="form-inline" method="POST">
                                    <table class="table-responsive display nowrap" style="width:100%">
                                    <div class="form-group">
                                        <tr>
                                            <td class="p-10">
                                            <select id="semester" name="semester" required class="btn btn-pink btn-outline m-b-10 m-l-5 form-control">
                                                <option selected="" disabled=""> - Semester - </option>
                                                <option value="12">Ganjil - Genap</option>
                                                <option value="21">Genap - Ganjil</option>
                                            </select>
                                            </td>

                                            <td class="p-10" style="width:100%">
                                            <select name="tahun" required class="btn btn-pink btn-outline m-b-10 m-l-5 form-control">
                                            <option selected="" disabled="">Pilih Tahun</option>
                                            <?php
                                                for($i=2016;$i<=date('Y');$i++){
                                                if($i == date('Y')){
                                                    echo '<option selected="" value="'.$i.'">'.$i.'</option>';
                                                }else{
                                                    echo '<option value="'.$i.'">'.$i.'</option>';
                                                }   
                                                }
                                            ?>
                                            </select>
                                            </td>

                                            <td class="p-10" style="width:100%">
                                                <button type="submit" class="btn btn-primary btn-md m-b-5 m-l-5 pull-right"> View </button>
                                            </td>
                                        </tr>
                                    </div>
                                    </table>
                                    </form>
                                </div>
                            </div>
                            <div class="card">
                                <center><h4> Periode Semester <?php
                                if ($semester == "12") {
                                    $smt = "Ganjil - Genap";
                                } else {
                                    $smt = "Genap - Ganjil";
                                }
                                echo $smt." ".$tahun; ?></h4></center>
                                <div class="card-body p-b-0">
                                    <!-- Tab panes -->
                                    <div class="tab-content">
                                        <div class="tab-pane active" id="tab" role="tabpanel">
                                            <div class="p-20">
                                            <table id="myTable" class="table table-responsive table-striped table-bordered table-hover display nowrap" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>School Year</th>
                                                <th>Semester</th>
                                                <th>NIM</th>
                                                <th>Name</th>
                                                <th>Generation</th>
                                                <th>Faculty</th>
                                                <th>Study Program</th>
                                                <th>Degree</th>
                                                <th>Gender</th>
                                                <th>Status</th>
                                                <th>Fee</th>
                                                <th>Country of Origin</th>
                                                <th>Country of Destination</th>
                                                <th>University Destination</th>
                                                <th>Exchange Period</th>
                                                <th>Passport ID</th>
                                                <th>Information</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php 
                                            $no = 1;
                                            foreach($mhs_io as $d){ 
                                            ?>
                                            <tr>
                                                <td><?php echo $no++ ?></td>
                                                <td><?php echo $d->schoolyear ?></td>
                                                <td><?php echo $d->semester ?></td>
                                                <td><?php echo $d->nim ?></td>
                                                <td><?php echo $d->name ?></td>
                                                <td><?php echo $d->generation ?></td>
                                                <td><?php echo $d->faculty ?></td>
                                                <td><?php echo $d->study_program ?></td>
                                                <td><?php echo $d->degree ?></td>
                                                <td><?php echo $d->gender ?></td>
                                                <td><?php echo $d->status ?></td>
                                                <td><?php echo $d->fee ?></td>
                                                <td><?php echo $d->country_of_origin ?></td>
                                                <td><?php echo $d->univ_origin ?></td>
                                                <td><?php echo $d->univ_dest ?></td>
                                                <td><?php echo $d->exchange_period ?></td>
                                                <td><?php echo $d->passport ?></td>
                                                <td><?php echo $d->inf ?></td>
                                            </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <!-- /# column -->
                </div>
                <!-- /# row -->

                <!-- End PAge Content -->
            </div>
            <!-- End Container fluid  -->
            <!-- footer -->
            <footer class="footer"> © 2018 All rights reserved.</footer>
            <!-- End footer -->
        </div>
        <!-- End Page wrapper  -->


<?php
$this->load->view('bar/js');
?>