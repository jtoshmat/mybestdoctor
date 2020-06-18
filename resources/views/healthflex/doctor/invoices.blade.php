@extends('healthflex.doctor.layout')
@section('sub-content')

    <!-- appointment row -->
    <div class="row">
        <div class="col-md-12">
            <div class="card card-topline-red">
                <div class="card-head">
                    <header></header>

                </div>
                <div class="card-body ">
                    <div class="row">
                        <div class="col-md-6 col-sm-6 col-xs-6">
                            <div class="btn-group">
                                <a href="book_appointment_material.html" id="addRow"
                                   class="btn btn-info">
                                    Add New <i class="fa fa-plus"></i>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-6">
                            <div class="btn-group pull-right">
                                <a class="btn deepPink-bgcolor  btn-outline dropdown-toggle"
                                   data-toggle="dropdown">Tools
                                    <i class="fa fa-angle-down"></i>
                                </a>
                                <ul class="dropdown-menu pull-right">
                                    <li>
                                        <a href="javascript:;">
                                            <i class="fa fa-print"></i> Print </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">
                                            <i class="fa fa-file-pdf-o"></i> Save as PDF </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">
                                            <i class="fa fa-file-excel-o"></i> Export to Excel </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="table-scrollable">
                        <table class="table table-hover table-checkable order-column full-width"
                               id="example4">
                            <thead>
                            <tr>
                                <th></th>
                                <th> Name </th>
                                <th> Email </th>
                                <th> Date Of Appointment </th>
                                <th> From </th>
                                <th> To </th>
                                <th> Mobile </th>
                                <th> Consulting Doctor </th>
                                <th>Injury/Condition</th>
                                <th> Action </th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr class="odd gradeX">
                                <td class="patient-img">
                                    <img src="img/user/user6.jpg" alt="">
                                </td>
                                <td>Jenish shah</td>
                                <td><a href="mailto:shuxer@gmail.com">
                                        jenish@gmail.com </a></td>
                                <td class="center">12 Jan 2012</td>
                                <td class="center">07:15</td>
                                <td class="center">07:30</td>
                                <td><a href="tel:444543564">
                                        444543564 </a></td>
                                <td>Dr.Rajesh</td>
                                <td>Fever</td>
                                <td>
                                    <a href="edit_appointment.html" class="btn btn-primary btn-xs">
                                        <i class="fa fa-pencil"></i>
                                    </a>
                                    <a href="javascript()" class="btn btn-danger btn-xs">
                                        <i class="fa fa-trash-o "></i>
                                    </a>
                                </td>
                            </tr>
                            <tr class="odd gradeX">
                                <td class="patient-img">
                                    <img src="img/user/user1.jpg" alt="">
                                </td>
                                <td>Pankaj Singh</td>
                                <td><a href="mailto:shuxer@gmail.com">
                                        jenish@gmail.com </a></td>
                                <td class="center">12 Jan 2012</td>
                                <td class="center">07:45</td>
                                <td class="center">08:00</td>
                                <td><a href="tel:444543564">
                                        444543564 </a></td>
                                <td>Dr.Sarah Smith</td>
                                <td>Malaria</td>
                                <td>
                                    <a href="edit_appointment.html" class="btn btn-primary btn-xs">
                                        <i class="fa fa-pencil"></i>
                                    </a>
                                    <a href="javasctipt()" class="btn btn-danger btn-xs">
                                        <i class="fa fa-trash-o "></i>
                                    </a>
                                </td>
                            </tr>
                            <tr class="odd gradeX">
                                <td class="patient-img">
                                    <img src="img/user/user2.jpg" alt="">
                                </td>
                                <td>Jenish shah</td>
                                <td><a href="mailto:shuxer@gmail.com">
                                        jenish@gmail.com </a></td>
                                <td class="center">12 Jan 2012</td>
                                <td class="center">08:15</td>
                                <td class="center">08:30</td>
                                <td><a href="tel:444543564">
                                        444543564 </a></td>
                                <td>Dr.Rajesh</td>
                                <td>Fever</td>
                                <td>
                                    <a href="edit_appointment.html" class="btn btn-primary btn-xs">
                                        <i class="fa fa-pencil"></i>
                                    </a>
                                    <a href="javascript()" class="btn btn-danger btn-xs">
                                        <i class="fa fa-trash-o "></i>
                                    </a>
                                </td>
                            </tr>
                            <tr class="odd gradeX">
                                <td class="patient-img">
                                    <img src="img/user/user3.jpg" alt="">
                                </td>
                                <td>Pankaj Singh</td>
                                <td><a href="mailto:shuxer@gmail.com">
                                        jenish@gmail.com </a></td>
                                <td class="center">12 Jan 2012</td>
                                <td class="center">08:45</td>
                                <td class="center">08:00</td>
                                <td><a href="tel:444543564">
                                        444543564 </a></td>
                                <td>Dr.Sarah Smith</td>
                                <td>Malaria</td>
                                <td>
                                    <a href="edit_appointment.html" class="btn btn-primary btn-xs">
                                        <i class="fa fa-pencil"></i>
                                    </a>
                                    <a href="javascript()" class="btn btn-danger btn-xs">
                                        <i class="fa fa-trash-o "></i>
                                    </a>
                                </td>
                            </tr>
                            <tr class="odd gradeX">
                                <td class="patient-img">
                                    <img src="img/user/user4.jpg" alt="">
                                </td>
                                <td>Jenish shah</td>
                                <td><a href="mailto:shuxer@gmail.com">
                                        jenish@gmail.com </a></td>
                                <td class="center">12 Jan 2012</td>
                                <td class="center">09:00</td>
                                <td class="center">09:15</td>
                                <td><a href="tel:444543564">
                                        444543564 </a></td>
                                <td>Dr.Rajesh</td>
                                <td>Fever</td>
                                <td>
                                    <a href="edit_appointment.html" class="btn btn-primary btn-xs">
                                        <i class="fa fa-pencil"></i>
                                    </a>
                                    <a href="javascript()" class="btn btn-danger btn-xs">
                                        <i class="fa fa-trash-o "></i>
                                    </a>
                                </td>
                            </tr>
                            <tr class="odd gradeX">
                                <td class="patient-img">
                                    <img src="img/user/user6.jpg" alt="">
                                </td>
                                <td>Pankaj Singh</td>
                                <td><a href="mailto:shuxer@gmail.com">
                                        jenish@gmail.com </a></td>
                                <td class="center">12 Jan 2012</td>
                                <td class="center">09:30</td>
                                <td class="center">09:45</td>
                                <td><a href="tel:444543564">
                                        444543564 </a></td>
                                <td>Dr.Sarah Smith</td>
                                <td>Malaria</td>
                                <td>
                                    <a href="edit_appointment.html" class="btn btn-primary btn-xs">
                                        <i class="fa fa-pencil"></i>
                                    </a>
                                    <a href="javascript()" class="btn btn-danger btn-xs">
                                        <i class="fa fa-trash-o "></i>
                                    </a>
                                </td>
                            </tr>
                            <tr class="odd gradeX">
                                <td class="patient-img">
                                    <img src="img/user/user5.jpg" alt="">
                                </td>
                                <td>Jenish shah</td>
                                <td><a href="mailto:shuxer@gmail.com">
                                        jenish@gmail.com </a></td>
                                <td class="center">12 Jan 2012</td>
                                <td class="center">09:45</td>
                                <td class="center">10:00</td>
                                <td><a href="tel:444543564">
                                        444543564 </a></td>
                                <td>Dr.Rajesh</td>
                                <td>Cholera</td>
                                <td>
                                    <a href="edit_appointment.html" class="btn btn-primary btn-xs">
                                        <i class="fa fa-pencil"></i>
                                    </a>
                                    <a href="javascript()" class="btn btn-danger btn-xs">
                                        <i class="fa fa-trash-o "></i>
                                    </a>
                                </td>
                            </tr>
                            <tr class="odd gradeX">
                                <td class="patient-img">
                                    <img src="img/user/user8.jpg" alt="">
                                </td>
                                <td>Pankaj Singh</td>
                                <td><a href="mailto:shuxer@gmail.com">
                                        jenish@gmail.com </a></td>
                                <td class="center">12 Jan 2012</td>
                                <td class="center">10:15</td>
                                <td class="center">10:30</td>
                                <td><a href="tel:444543564">
                                        444543564 </a></td>
                                <td>Dr.Rajesh</td>
                                <td>Fever</td>
                                <td>
                                    <a href="edit_appointment.html" class="btn btn-primary btn-xs">
                                        <i class="fa fa-pencil"></i>
                                    </a>
                                    <a href="javascript()" class="btn btn-danger btn-xs">
                                        <i class="fa fa-trash-o "></i>
                                    </a>
                                </td>
                            </tr>
                            <tr class="odd gradeX">
                                <td class="patient-img">
                                    <img src="img/user/user7.jpg" alt="">
                                </td>
                                <td>Jenish shah</td>
                                <td><a href="mailto:shuxer@gmail.com">
                                        jenish@gmail.com </a></td>
                                <td class="center">12 Jan 2012</td>
                                <td class="center">11:15</td>
                                <td class="center">11:30</td>
                                <td><a href="tel:444543564">
                                        444543564 </a></td>
                                <td>Dr.Rajesh</td>
                                <td>Malaria</td>
                                <td>
                                    <a href="edit_appointment.html" class="btn btn-primary btn-xs">
                                        <i class="fa fa-pencil"></i>
                                    </a>
                                    <a href="javascript()" class="btn btn-danger btn-xs">
                                        <i class="fa fa-trash-o "></i>
                                    </a>
                                </td>
                            </tr>
                            <tr class="odd gradeX">
                                <td class="patient-img">
                                    <img src="img/user/user9.jpg" alt="">
                                </td>
                                <td>Pankaj Singh</td>
                                <td><a href="mailto:shuxer@gmail.com">
                                        jenish@gmail.com </a></td>
                                <td class="center">12 Jan 2012</td>
                                <td class="center">07:15</td>
                                <td class="center">07:30</td>
                                <td><a href="tel:444543564">
                                        444543564 </a></td>
                                <td>Dr.Rajesh</td>
                                <td>Fever</td>
                                <td>
                                    <a href="edit_appointment.html" class="btn btn-primary btn-xs">
                                        <i class="fa fa-pencil"></i>
                                    </a>
                                    <a href="javascript()" class="btn btn-danger btn-xs">
                                        <i class="fa fa-trash-o "></i>
                                    </a>
                                </td>
                            </tr>
                            <tr class="odd gradeX">
                                <td class="patient-img">
                                    <img src="img/user/user6.jpg" alt="">
                                </td>
                                <td>Pankaj Singh</td>
                                <td><a href="mailto:shuxer@gmail.com">
                                        jenish@gmail.com </a></td>
                                <td class="center">12 Jan 2012</td>
                                <td class="center">07:15</td>
                                <td class="center">07:30</td>
                                <td><a href="tel:444543564">
                                        444543564 </a></td>
                                <td>Dr.Jay Soni</td>
                                <td>Cholera</td>
                                <td>
                                    <a href="edit_appointment.html" class="btn btn-primary btn-xs">
                                        <i class="fa fa-pencil"></i>
                                    </a>
                                    <a href="javascript()" class="btn btn-danger btn-xs">
                                        <i class="fa fa-trash-o "></i>
                                    </a>
                                </td>
                            </tr>
                            <tr class="odd gradeX">
                                <td class="patient-img">
                                    <img src="img/user/user2.jpg" alt="">
                                </td>
                                <td>Jenish shah</td>
                                <td><a href="mailto:shuxer@gmail.com">
                                        jenish@gmail.com </a></td>
                                <td class="center">12 Jan 2012</td>
                                <td class="center">07:15</td>
                                <td class="center">07:30</td>
                                <td><a href="tel:444543564">
                                        444543564 </a></td>
                                <td>Dr.Rajesh</td>
                                <td>Malaria</td>
                                <td>
                                    <a href="edit_appointment.html" class="btn btn-primary btn-xs">
                                        <i class="fa fa-pencil"></i>
                                    </a>
                                    <a href="javascript()" class="btn btn-danger btn-xs">
                                        <i class="fa fa-trash-o "></i>
                                    </a>
                                </td>
                            </tr>
                            <tr class="odd gradeX">
                                <td class="patient-img">
                                    <img src="img/user/user3.jpg" alt="">
                                </td>
                                <td>Pankaj Singh</td>
                                <td><a href="mailto:shuxer@gmail.com">
                                        jenish@gmail.com </a></td>
                                <td class="center">12 Jan 2012</td>
                                <td class="center">07:15</td>
                                <td class="center">07:30</td>
                                <td><a href="tel:444543564">
                                        444543564 </a></td>
                                <td>Dr.Jay Soni</td>
                                <td>Fever</td>
                                <td>
                                    <a href="edit_appointment.html" class="btn btn-primary btn-xs">
                                        <i class="fa fa-pencil"></i>
                                    </a>
                                    <a href="javascript()" class="btn btn-danger btn-xs">
                                        <i class="fa fa-trash-o "></i>
                                    </a>
                                </td>
                            </tr>
                            <tr class="odd gradeX">
                                <td class="patient-img">
                                    <img src="img/user/user5.jpg" alt="">
                                </td>
                                <td>Jenish shah</td>
                                <td><a href="mailto:shuxer@gmail.com">
                                        jenish@gmail.com </a></td>
                                <td class="center">12 Jan 2012</td>
                                <td class="center">07:15</td>
                                <td class="center">07:30</td>
                                <td><a href="tel:444543564">
                                        444543564 </a></td>
                                <td>Dr.Rajesh</td>
                                <td>Cholera</td>
                                <td>
                                    <a href="edit_appointment.html" class="btn btn-primary btn-xs">
                                        <i class="fa fa-pencil"></i>
                                    </a>
                                    <a href="javascript()" class="btn btn-danger btn-xs">
                                        <i class="fa fa-trash-o "></i>
                                    </a>
                                </td>
                            </tr>
                            <tr class="odd gradeX">
                                <td class="patient-img">
                                    <img src="img/user/user4.jpg" alt="">
                                </td>
                                <td>Sneha Pandya</td>
                                <td><a href="mailto:shuxer@gmail.com">
                                        jenish@gmail.com </a></td>
                                <td class="center">12 Jan 2012</td>
                                <td class="center">07:15</td>
                                <td class="center">07:30</td>
                                <td><a href="tel:444543564">
                                        444543564 </a></td>
                                <td>Dr.Rajesh</td>
                                <td>Malaria</td>
                                <td>
                                    <a href="edit_appointment.html" class="btn btn-primary btn-xs">
                                        <i class="fa fa-pencil"></i>
                                    </a>
                                    <a href="javascript()" class="btn btn-danger btn-xs">
                                        <i class="fa fa-trash-o "></i>
                                    </a>
                                </td>
                            </tr>
                            <tr class="odd gradeX">
                                <td class="patient-img">
                                    <img src="img/user/user7.jpg" alt="">
                                </td>
                                <td>Jenish shah</td>
                                <td><a href="mailto:shuxer@gmail.com">
                                        jenish@gmail.com </a></td>
                                <td class="center">12 Jan 2012</td>
                                <td class="center">07:15</td>
                                <td class="center">07:30</td>
                                <td><a href="tel:444543564">
                                        444543564 </a></td>
                                <td>Dr.Jay Soni</td>
                                <td>Fever</td>
                                <td>
                                    <a href="edit_appointment.html" class="btn btn-primary btn-xs">
                                        <i class="fa fa-pencil"></i>
                                    </a>
                                    <a href="javascript()" class="btn btn-danger btn-xs">
                                        <i class="fa fa-trash-o "></i>
                                    </a>
                                </td>
                            </tr>
                            <tr class="odd gradeX">
                                <td class="patient-img">
                                    <img src="img/user/user8.jpg" alt="">
                                </td>
                                <td>Sneha Pandya</td>
                                <td><a href="mailto:shuxer@gmail.com">
                                        jenish@gmail.com </a></td>
                                <td class="center">12 Jan 2012</td>
                                <td class="center">07:15</td>
                                <td class="center">07:30</td>
                                <td><a href="tel:444543564">
                                        444543564 </a></td>
                                <td>Dr.Rajesh</td>
                                <td>Cholera</td>
                                <td>
                                    <a href="edit_appointment.html" class="btn btn-primary btn-xs">
                                        <i class="fa fa-pencil"></i>
                                    </a>
                                    <a href="javascript()" class="btn btn-danger btn-xs">
                                        <i class="fa fa-trash-o "></i>
                                    </a>
                                </td>
                            </tr>
                            <tr class="odd gradeX">
                                <td class="patient-img">
                                    <img src="img/user/user9.jpg" alt="">
                                </td>
                                <td>Pooja Patel</td>
                                <td><a href="mailto:shuxer@gmail.com">
                                        jenish@gmail.com </a></td>
                                <td class="center">12 Jan 2012</td>
                                <td class="center">07:15</td>
                                <td class="center">07:30</td>
                                <td><a href="tel:444543564">
                                        444543564 </a></td>
                                <td>Dr.Rajesh</td>
                                <td>Malaria</td>
                                <td>
                                    <a href="edit_appointment.html" class="btn btn-primary btn-xs">
                                        <i class="fa fa-pencil"></i>
                                    </a>
                                    <a href="javascript()" class="btn btn-danger btn-xs">
                                        <i class="fa fa-trash-o "></i>
                                    </a>
                                </td>
                            </tr>
                            <tr class="odd gradeX">
                                <td class="patient-img">
                                    <img src="img/user/user6.jpg" alt="">
                                </td>
                                <td>Jenish shah</td>
                                <td><a href="mailto:shuxer@gmail.com">
                                        jenish@gmail.com </a></td>
                                <td class="center">12 Jan 2012</td>
                                <td class="center">07:15</td>
                                <td class="center">07:30</td>
                                <td><a href="tel:444543564">
                                        444543564 </a></td>
                                <td>Dr.Rajesh</td>
                                <td>Fever</td>
                                <td>
                                    <a href="edit_appointment.html" class="btn btn-primary btn-xs">
                                        <i class="fa fa-pencil"></i>
                                    </a>
                                    <a href="javascript()" class="btn btn-danger btn-xs">
                                        <i class="fa fa-trash-o "></i>
                                    </a>
                                </td>
                            </tr>
                            <tr class="odd gradeX">
                                <td class="patient-img">
                                    <img src="img/user/user2.jpg" alt="">
                                </td>
                                <td>Sneha Pandya</td>
                                <td><a href="mailto:shuxer@gmail.com">
                                        jenish@gmail.com </a></td>
                                <td class="center">12 Jan 2012</td>
                                <td class="center">07:15</td>
                                <td class="center">07:30</td>
                                <td><a href="tel:444543564">
                                        444543564 </a></td>
                                <td>Dr.Rajesh</td>
                                <td>Cholera</td>
                                <td>
                                    <a href="edit_appointment.html" class="btn btn-primary btn-xs">
                                        <i class="fa fa-pencil"></i>
                                    </a>
                                    <a href="javascript()" class="btn btn-danger btn-xs">
                                        <i class="fa fa-trash-o "></i>
                                    </a>
                                </td>
                            </tr>
                            <tr class="odd gradeX">
                                <td class="patient-img">
                                    <img src="img/user/user5.jpg" alt="">
                                </td>
                                <td>Sneha Pandya</td>
                                <td><a href="mailto:shuxer@gmail.com">
                                        jenish@gmail.com </a></td>
                                <td class="center">12 Jan 2012</td>
                                <td class="center">07:15</td>
                                <td class="center">07:30</td>
                                <td><a href="tel:444543564">
                                        444543564 </a></td>
                                <td>Dr.Rajesh</td>
                                <td>Fever</td>
                                <td>
                                    <a href="edit_appointment.html" class="btn btn-primary btn-xs">
                                        <i class="fa fa-pencil"></i>
                                    </a>
                                    <a href="javascript()" class="btn btn-danger btn-xs">
                                        <i class="fa fa-trash-o "></i>
                                    </a>
                                </td>
                            </tr>
                            <tr class="odd gradeX">
                                <td class="patient-img">
                                    <img src="img/user/user7.jpg" alt="">
                                </td>
                                <td>Pooja Patel</td>
                                <td><a href="mailto:shuxer@gmail.com">
                                        jenish@gmail.com </a></td>
                                <td class="center">12 Jan 2012</td>
                                <td class="center">07:15</td>
                                <td class="center">07:30</td>
                                <td><a href="tel:444543564">
                                        444543564 </a></td>
                                <td>Dr.Rajesh</td>
                                <td>Fever</td>
                                <td>
                                    <a href="edit_appointment.html" class="btn btn-primary btn-xs">
                                        <i class="fa fa-pencil"></i>
                                    </a>
                                    <a href="javascript()" class="btn btn-danger btn-xs">
                                        <i class="fa fa-trash-o "></i>
                                    </a>
                                </td>
                            </tr>
                            <tr class="odd gradeX">
                                <td class="patient-img">
                                    <img src="img/user/user4.jpg" alt="">
                                </td>
                                <td>Jenish shah</td>
                                <td><a href="mailto:shuxer@gmail.com">
                                        jenish@gmail.com </a></td>
                                <td class="center">12 Jan 2012</td>
                                <td class="center">07:15</td>
                                <td class="center">07:30</td>
                                <td><a href="tel:444543564">
                                        444543564 </a></td>
                                <td>Dr.Rajesh</td>
                                <td>Cholera</td>
                                <td>
                                    <a href="edit_appointment.html" class="btn btn-primary btn-xs">
                                        <i class="fa fa-pencil"></i>
                                    </a>
                                    <a href="javascript()" class="btn btn-danger btn-xs">
                                        <i class="fa fa-trash-o "></i>
                                    </a>
                                </td>
                            </tr>
                            <tr class="odd gradeX">
                                <td class="patient-img">
                                    <img src="img/user/user9.jpg" alt="">
                                </td>
                                <td>Sneha Pandya</td>
                                <td><a href="mailto:shuxer@gmail.com">
                                        jenish@gmail.com </a></td>
                                <td class="center">12 Jan 2012</td>
                                <td class="center">07:15</td>
                                <td class="center">07:30</td>
                                <td><a href="tel:444543564">
                                        444543564 </a></td>
                                <td>Dr.Rajesh</td>
                                <td>Fever</td>
                                <td>
                                    <a href="edit_appointment.html" class="btn btn-primary btn-xs">
                                        <i class="fa fa-pencil"></i>
                                    </a>
                                    <a href="javascript()" class="btn btn-danger btn-xs">
                                        <i class="fa fa-trash-o "></i>
                                    </a>
                                </td>
                            </tr>
                            <tr class="odd gradeX">
                                <td class="patient-img">
                                    <img src="img/user/user8.jpg" alt="">
                                </td>
                                <td>Pooja Patel</td>
                                <td><a href="mailto:shuxer@gmail.com">
                                        jenish@gmail.com </a></td>
                                <td class="center">12 Jan 2012</td>
                                <td class="center">07:15</td>
                                <td class="center">07:30</td>
                                <td><a href="tel:444543564">
                                        444543564 </a></td>
                                <td>Dr.Rajesh</td>
                                <td>Cholera</td>
                                <td>
                                    <a href="edit_appointment.html" class="btn btn-primary btn-xs">
                                        <i class="fa fa-pencil"></i>
                                    </a>
                                    <a href="javascript()" class="btn btn-danger btn-xs">
                                        <i class="fa fa-trash-o "></i>
                                    </a>
                                </td>
                            </tr>
                            <tr class="odd gradeX">
                                <td class="patient-img">
                                    <img src="img/user/user6.jpg" alt="">
                                </td>
                                <td>Jenish shah</td>
                                <td><a href="mailto:shuxer@gmail.com">
                                        jenish@gmail.com </a></td>
                                <td class="center">12 Jan 2012</td>
                                <td class="center">07:15</td>
                                <td class="center">07:30</td>
                                <td><a href="tel:444543564">
                                        444543564 </a></td>
                                <td>Dr.Rajesh</td>
                                <td>Fever</td>
                                <td>
                                    <a href="edit_appointment.html" class="btn btn-primary btn-xs">
                                        <i class="fa fa-pencil"></i>
                                    </a>
                                    <a href="javascript()" class="btn btn-danger btn-xs">
                                        <i class="fa fa-trash-o "></i>
                                    </a>
                                </td>
                            </tr>
                            <tr class="odd gradeX">
                                <td class="patient-img">
                                    <img src="img/user/user5.jpg" alt="">
                                </td>
                                <td>Sneha Pandya</td>
                                <td><a href="mailto:shuxer@gmail.com">
                                        jenish@gmail.com </a></td>
                                <td class="center">12 Jan 2012</td>
                                <td class="center">07:15</td>
                                <td class="center">07:30</td>
                                <td><a href="tel:444543564">
                                        444543564 </a></td>
                                <td>Dr.Rajesh</td>
                                <td>Fever</td>
                                <td>
                                    <a href="edit_appointment.html" class="btn btn-primary btn-xs">
                                        <i class="fa fa-pencil"></i>
                                    </a>
                                    <a href="javascript()" class="btn btn-danger btn-xs">
                                        <i class="fa fa-trash-o "></i>
                                    </a>
                                </td>
                            </tr>
                            <tr class="odd gradeX">
                                <td class="patient-img">
                                    <img src="img/user/user7.jpg" alt="">
                                </td>
                                <td>Pooja Patel</td>
                                <td><a href="mailto:shuxer@gmail.com">
                                        jenish@gmail.com </a></td>
                                <td class="center">12 Jan 2012</td>
                                <td class="center">07:15</td>
                                <td class="center">07:30</td>
                                <td><a href="tel:444543564">
                                        444543564 </a></td>
                                <td>Dr.Rajesh</td>
                                <td>Cholera</td>
                                <td>
                                    <a href="edit_appointment.html" class="btn btn-primary btn-xs">
                                        <i class="fa fa-pencil"></i>
                                    </a>
                                    <a href="javascript()" class="btn btn-danger btn-xs">
                                        <i class="fa fa-trash-o "></i>
                                    </a>
                                </td>
                            </tr>
                            <tr class="odd gradeX">
                                <td class="patient-img">
                                    <img src="img/user/user9.jpg" alt="">
                                </td>
                                <td>Sneha Pandya</td>
                                <td><a href="mailto:shuxer@gmail.com">
                                        jenish@gmail.com </a></td>
                                <td class="center">12 Jan 2012</td>
                                <td class="center">07:15</td>
                                <td class="center">07:30</td>
                                <td><a href="tel:444543564">
                                        444543564 </a></td>
                                <td>Dr.Rajesh</td>
                                <td>Fever</td>
                                <td>
                                    <a href="edit_appointment.html" class="btn btn-primary btn-xs">
                                        <i class="fa fa-pencil"></i>
                                    </a>
                                    <a href="javascript()" class="btn btn-danger btn-xs">
                                        <i class="fa fa-trash-o "></i>
                                    </a>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end appointment row -->

@endsection
