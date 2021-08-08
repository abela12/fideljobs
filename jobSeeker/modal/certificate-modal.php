<!--Add Certificate  Modal -->
<div class="modal fade add-certificate" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add Certificate </h5>
                <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <form name="add-certificate" id="add-certificate">

                    <div class="table-responsive">
                        <table class="table table-responsive-md" id="addCertificateTable">
                            <tr>
                                <div class="form-group">
                                    <td><input type="text" class="form-control" name="certificateName[]"
                                            placeholder="certificate Name" class="form-control name_list" required />
                                    </td>
                                </div>
                                <div class="form-group">


                                    <td><input type="text" class="form-control" name="certificateLink[]"
                                            placeholder="certificate link" class="form-control name_list" required />
                                    </td>


                                </div>
                                <div class="form-group">
                                    <td>

                                        <button type="button" name="addCertificateBtn" id="addCertificateBtn"
                                            class="btn btn-primary btn-sm">Add
                                            More</button>

                                    </td>
                                </div>
                            </tr>
                        </table>
                    </div>

                </form>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger btn-sm light" data-dismiss="modal">Close</button>
                <button type="submit" name="addCertificate" id="addCertificate" class="btn btn-primary btn-sm">Save
                    changes</button>
            </div>
        </div>
    </div>
</div>