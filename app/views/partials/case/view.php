<?php
$comp_model = new SharedController;
$page_element_id = "view-page-" . random_str();
$current_page = $this->set_current_page_link();
$csrf_token = Csrf::$token;
//Page Data Information from Controller
$data = $this->view_data;
//$rec_id = $data['__tableprimarykey'];
$page_id = $this->route->page_id; //Page id from url
$view_title = $this->view_title;
$show_header = $this->show_header;
$show_edit_btn = $this->show_edit_btn;
$show_delete_btn = $this->show_delete_btn;
$show_export_btn = $this->show_export_btn;
?>
<section class="page" id="<?php echo $page_element_id; ?>" data-page-type="view"  data-display-type="table" data-page-url="<?php print_link($current_page); ?>">
    <?php
    if( $show_header == true ){
    ?>
    <div  class="bg-light p-3 mb-3">
        <div class="container">
            <div class="row ">
                <div class="col ">
                    <h4 class="record-title">View  Case</h4>
                </div>
            </div>
        </div>
    </div>
    <?php
    }
    ?>
    <div  class="">
        <div class="container">
            <div class="row ">
                <div class="col-md-12 comp-grid">
                    <?php $this :: display_page_errors(); ?>
                    <div  class="card animated fadeIn page-content">
                        <?php
                        $counter = 0;
                        if(!empty($data)){
                        $rec_id = (!empty($data['id']) ? urlencode($data['id']) : null);
                        $counter++;
                        ?>
                        <div id="page-report-body" class="">
                            <table class="table table-hover table-borderless table-striped">
                                <!-- Table Body Start -->
                                <tbody class="page-data" id="page-data-<?php echo $page_element_id; ?>">
                                    <tr  class="td-id">
                                        <th class="title"> Id: </th>
                                        <td class="value">
                                            <span  data-value="<?php echo $data['id']; ?>" 
                                                data-pk="<?php echo $data['id'] ?>" 
                                                data-url="<?php print_link("case/editfield/" . urlencode($data['id'])); ?>" 
                                                data-name="id" 
                                                data-title="Enter Id" 
                                                data-placement="left" 
                                                data-toggle="click" 
                                                data-type="number" 
                                                data-mode="popover" 
                                                data-showbuttons="left" 
                                                class="is-editable" >
                                                <?php echo $data['id']; ?> 
                                            </span>
                                        </td>
                                    </tr>
                                    <tr  class="td-case_tittle">
                                        <th class="title"> Case Tittle: </th>
                                        <td class="value">
                                            <span  data-value="<?php echo $data['case_tittle']; ?>" 
                                                data-pk="<?php echo $data['id'] ?>" 
                                                data-url="<?php print_link("case/editfield/" . urlencode($data['id'])); ?>" 
                                                data-name="case_tittle" 
                                                data-title="Enter Case Tittle" 
                                                data-placement="left" 
                                                data-toggle="click" 
                                                data-type="text" 
                                                data-mode="popover" 
                                                data-showbuttons="left" 
                                                class="is-editable" >
                                                <?php echo $data['case_tittle']; ?> 
                                            </span>
                                        </td>
                                    </tr>
                                    <tr  class="td-case_no">
                                        <th class="title"> Case No: </th>
                                        <td class="value">
                                            <span  data-value="<?php echo $data['case_no']; ?>" 
                                                data-pk="<?php echo $data['id'] ?>" 
                                                data-url="<?php print_link("case/editfield/" . urlencode($data['id'])); ?>" 
                                                data-name="case_no" 
                                                data-title="Enter Case No" 
                                                data-placement="left" 
                                                data-toggle="click" 
                                                data-type="text" 
                                                data-mode="popover" 
                                                data-showbuttons="left" 
                                                class="is-editable" >
                                                <?php echo $data['case_no']; ?> 
                                            </span>
                                        </td>
                                    </tr>
                                    <tr  class="td-client_name">
                                        <th class="title"> Client Name: </th>
                                        <td class="value">
                                            <span  data-value="<?php echo $data['client_name']; ?>" 
                                                data-pk="<?php echo $data['id'] ?>" 
                                                data-url="<?php print_link("case/editfield/" . urlencode($data['id'])); ?>" 
                                                data-name="client_name" 
                                                data-title="Enter Client Name" 
                                                data-placement="left" 
                                                data-toggle="click" 
                                                data-type="text" 
                                                data-mode="popover" 
                                                data-showbuttons="left" 
                                                class="is-editable" >
                                                <?php echo $data['client_name']; ?> 
                                            </span>
                                        </td>
                                    </tr>
                                    <tr  class="td-location">
                                        <th class="title"> Location: </th>
                                        <td class="value">
                                            <span  data-value="<?php echo $data['location']; ?>" 
                                                data-pk="<?php echo $data['id'] ?>" 
                                                data-url="<?php print_link("case/editfield/" . urlencode($data['id'])); ?>" 
                                                data-name="location" 
                                                data-title="Enter Location" 
                                                data-placement="left" 
                                                data-toggle="click" 
                                                data-type="text" 
                                                data-mode="popover" 
                                                data-showbuttons="left" 
                                                class="is-editable" >
                                                <?php echo $data['location']; ?> 
                                            </span>
                                        </td>
                                    </tr>
                                    <tr  class="td-court_category">
                                        <th class="title"> Court Category: </th>
                                        <td class="value">
                                            <span  data-value="<?php echo $data['court_category']; ?>" 
                                                data-pk="<?php echo $data['id'] ?>" 
                                                data-url="<?php print_link("case/editfield/" . urlencode($data['id'])); ?>" 
                                                data-name="court_category" 
                                                data-title="Enter Court Category" 
                                                data-placement="left" 
                                                data-toggle="click" 
                                                data-type="text" 
                                                data-mode="popover" 
                                                data-showbuttons="left" 
                                                class="is-editable" >
                                                <?php echo $data['court_category']; ?> 
                                            </span>
                                        </td>
                                    </tr>
                                    <tr  class="td-court">
                                        <th class="title"> Court: </th>
                                        <td class="value">
                                            <span  data-value="<?php echo $data['court']; ?>" 
                                                data-pk="<?php echo $data['id'] ?>" 
                                                data-url="<?php print_link("case/editfield/" . urlencode($data['id'])); ?>" 
                                                data-name="court" 
                                                data-title="Enter Court" 
                                                data-placement="left" 
                                                data-toggle="click" 
                                                data-type="text" 
                                                data-mode="popover" 
                                                data-showbuttons="left" 
                                                class="is-editable" >
                                                <?php echo $data['court']; ?> 
                                            </span>
                                        </td>
                                    </tr>
                                    <tr  class="td-case_category">
                                        <th class="title"> Case Category: </th>
                                        <td class="value">
                                            <span  data-value="<?php echo $data['case_category']; ?>" 
                                                data-pk="<?php echo $data['id'] ?>" 
                                                data-url="<?php print_link("case/editfield/" . urlencode($data['id'])); ?>" 
                                                data-name="case_category" 
                                                data-title="Enter Case Category" 
                                                data-placement="left" 
                                                data-toggle="click" 
                                                data-type="text" 
                                                data-mode="popover" 
                                                data-showbuttons="left" 
                                                class="is-editable" >
                                                <?php echo $data['case_category']; ?> 
                                            </span>
                                        </td>
                                    </tr>
                                    <tr  class="td-case_stage">
                                        <th class="title"> Case Stage: </th>
                                        <td class="value">
                                            <span  data-value="<?php echo $data['case_stage']; ?>" 
                                                data-pk="<?php echo $data['id'] ?>" 
                                                data-url="<?php print_link("case/editfield/" . urlencode($data['id'])); ?>" 
                                                data-name="case_stage" 
                                                data-title="Enter Case Stage" 
                                                data-placement="left" 
                                                data-toggle="click" 
                                                data-type="text" 
                                                data-mode="popover" 
                                                data-showbuttons="left" 
                                                class="is-editable" >
                                                <?php echo $data['case_stage']; ?> 
                                            </span>
                                        </td>
                                    </tr>
                                    <tr  class="td-act">
                                        <th class="title"> Act: </th>
                                        <td class="value">
                                            <span  data-value="<?php echo $data['act']; ?>" 
                                                data-pk="<?php echo $data['id'] ?>" 
                                                data-url="<?php print_link("case/editfield/" . urlencode($data['id'])); ?>" 
                                                data-name="act" 
                                                data-title="Enter Act" 
                                                data-placement="left" 
                                                data-toggle="click" 
                                                data-type="text" 
                                                data-mode="popover" 
                                                data-showbuttons="left" 
                                                class="is-editable" >
                                                <?php echo $data['act']; ?> 
                                            </span>
                                        </td>
                                    </tr>
                                    <div><?php echo $data['description']; ?></div>
                                    <tr  class="td-filling_date">
                                        <th class="title"> Filling Date: </th>
                                        <td class="value">
                                            <span  data-flatpickr="{ minDate: '', maxDate: ''}" 
                                                data-value="<?php echo $data['filling_date']; ?>" 
                                                data-pk="<?php echo $data['id'] ?>" 
                                                data-url="<?php print_link("case/editfield/" . urlencode($data['id'])); ?>" 
                                                data-name="filling_date" 
                                                data-title="Enter Filling Date" 
                                                data-placement="left" 
                                                data-toggle="click" 
                                                data-type="flatdatetimepicker" 
                                                data-mode="popover" 
                                                data-showbuttons="left" 
                                                class="is-editable" >
                                                <?php echo $data['filling_date']; ?> 
                                            </span>
                                        </td>
                                    </tr>
                                    <tr  class="td-hearing_date">
                                        <th class="title"> Hearing Date: </th>
                                        <td class="value">
                                            <span  data-flatpickr="{ minDate: '', maxDate: ''}" 
                                                data-value="<?php echo $data['hearing_date']; ?>" 
                                                data-pk="<?php echo $data['id'] ?>" 
                                                data-url="<?php print_link("case/editfield/" . urlencode($data['id'])); ?>" 
                                                data-name="hearing_date" 
                                                data-title="Enter Hearing Date" 
                                                data-placement="left" 
                                                data-toggle="click" 
                                                data-type="flatdatetimepicker" 
                                                data-mode="popover" 
                                                data-showbuttons="left" 
                                                class="is-editable" >
                                                <?php echo $data['hearing_date']; ?> 
                                            </span>
                                        </td>
                                    </tr>
                                    <tr  class="td-apposite_lawyer">
                                        <th class="title"> Apposite Lawyer: </th>
                                        <td class="value">
                                            <span  data-value="<?php echo $data['apposite_lawyer']; ?>" 
                                                data-pk="<?php echo $data['id'] ?>" 
                                                data-url="<?php print_link("case/editfield/" . urlencode($data['id'])); ?>" 
                                                data-name="apposite_lawyer" 
                                                data-title="Enter Apposite Lawyer" 
                                                data-placement="left" 
                                                data-toggle="click" 
                                                data-type="text" 
                                                data-mode="popover" 
                                                data-showbuttons="left" 
                                                class="is-editable" >
                                                <?php echo $data['apposite_lawyer']; ?> 
                                            </span>
                                        </td>
                                    </tr>
                                    <tr  class="td-total_fees">
                                        <th class="title"> Total Fees: </th>
                                        <td class="value">
                                            <span  data-value="<?php echo $data['total_fees']; ?>" 
                                                data-pk="<?php echo $data['id'] ?>" 
                                                data-url="<?php print_link("case/editfield/" . urlencode($data['id'])); ?>" 
                                                data-name="total_fees" 
                                                data-title="Enter Total Fees" 
                                                data-placement="left" 
                                                data-toggle="click" 
                                                data-type="text" 
                                                data-mode="popover" 
                                                data-showbuttons="left" 
                                                class="is-editable" >
                                                <?php echo $data['total_fees']; ?> 
                                            </span>
                                        </td>
                                    </tr>
                                    <tr  class="td-respondent">
                                        <th class="title"> Respondent: </th>
                                        <td class="value">
                                            <span  data-value="<?php echo $data['respondent']; ?>" 
                                                data-pk="<?php echo $data['id'] ?>" 
                                                data-url="<?php print_link("case/editfield/" . urlencode($data['id'])); ?>" 
                                                data-name="respondent" 
                                                data-title="Enter Respondent" 
                                                data-placement="left" 
                                                data-toggle="click" 
                                                data-type="text" 
                                                data-mode="popover" 
                                                data-showbuttons="left" 
                                                class="is-editable" >
                                                <?php echo $data['respondent']; ?> 
                                            </span>
                                        </td>
                                    </tr>
                                    <tr  class="td-customer_mobile">
                                        <th class="title"> Customer Mobile: </th>
                                        <td class="value">
                                            <span  data-value="<?php echo $data['customer_mobile']; ?>" 
                                                data-pk="<?php echo $data['id'] ?>" 
                                                data-url="<?php print_link("case/editfield/" . urlencode($data['id'])); ?>" 
                                                data-name="customer_mobile" 
                                                data-title="Enter Customer Mobile" 
                                                data-placement="left" 
                                                data-toggle="click" 
                                                data-type="text" 
                                                data-mode="popover" 
                                                data-showbuttons="left" 
                                                class="is-editable" >
                                                <?php echo $data['customer_mobile']; ?> 
                                            </span>
                                        </td>
                                    </tr>
                                    <tr  class="td-installment_one">
                                        <th class="title"> Installment One: </th>
                                        <td class="value">
                                            <span  data-value="<?php echo $data['installment_one']; ?>" 
                                                data-pk="<?php echo $data['id'] ?>" 
                                                data-url="<?php print_link("case/editfield/" . urlencode($data['id'])); ?>" 
                                                data-name="installment_one" 
                                                data-title="Enter Installment One" 
                                                data-placement="left" 
                                                data-toggle="click" 
                                                data-type="text" 
                                                data-mode="popover" 
                                                data-showbuttons="left" 
                                                class="is-editable" >
                                                <?php echo $data['installment_one']; ?> 
                                            </span>
                                        </td>
                                    </tr>
                                </tbody>
                                <!-- Table Body End -->
                            </table>
                        </div>
                        <div class="p-3 d-flex">
                            <div class="dropup export-btn-holder mx-1">
                                <button class="btn btn-sm btn-primary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fa fa-save"></i> Export
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <?php $export_print_link = $this->set_current_page_link(array('format' => 'print')); ?>
                                    <a class="dropdown-item export-link-btn" data-format="print" href="<?php print_link($export_print_link); ?>" target="_blank">
                                        <img src="<?php print_link('assets/images/print.png') ?>" class="mr-2" /> PRINT
                                        </a>
                                        <?php $export_pdf_link = $this->set_current_page_link(array('format' => 'pdf')); ?>
                                        <a class="dropdown-item export-link-btn" data-format="pdf" href="<?php print_link($export_pdf_link); ?>" target="_blank">
                                            <img src="<?php print_link('assets/images/pdf.png') ?>" class="mr-2" /> PDF
                                            </a>
                                            <?php $export_word_link = $this->set_current_page_link(array('format' => 'word')); ?>
                                            <a class="dropdown-item export-link-btn" data-format="word" href="<?php print_link($export_word_link); ?>" target="_blank">
                                                <img src="<?php print_link('assets/images/doc.png') ?>" class="mr-2" /> WORD
                                                </a>
                                                <?php $export_csv_link = $this->set_current_page_link(array('format' => 'csv')); ?>
                                                <a class="dropdown-item export-link-btn" data-format="csv" href="<?php print_link($export_csv_link); ?>" target="_blank">
                                                    <img src="<?php print_link('assets/images/csv.png') ?>" class="mr-2" /> CSV
                                                    </a>
                                                    <?php $export_excel_link = $this->set_current_page_link(array('format' => 'excel')); ?>
                                                    <a class="dropdown-item export-link-btn" data-format="excel" href="<?php print_link($export_excel_link); ?>" target="_blank">
                                                        <img src="<?php print_link('assets/images/xsl.png') ?>" class="mr-2" /> EXCEL
                                                        </a>
                                                    </div>
                                                </div>
                                                <a class="btn btn-sm btn-info"  href="<?php print_link("case/edit/$rec_id"); ?>">
                                                    <i class="fa fa-edit"></i> Edit
                                                </a>
                                                <a class="btn btn-sm btn-danger record-delete-btn mx-1"  href="<?php print_link("case/delete/$rec_id/?csrf_token=$csrf_token&redirect=$current_page"); ?>" data-prompt-msg="Are you sure you want to delete this record?" data-display-style="modal">
                                                    <i class="fa fa-times"></i> Delete
                                                </a>
                                            </div>
                                            <?php
                                            }
                                            else{
                                            ?>
                                            <!-- Empty Record Message -->
                                            <div class="text-muted p-3">
                                                <i class="fa fa-ban"></i> No Record Found
                                            </div>
                                            <?php
                                            }
                                            ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
