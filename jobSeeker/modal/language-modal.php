<!--Add Language Modal -->
<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add Language</h5>
                <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <form name="add_name" id="add_name">

                    <div class="table-responsive">
                        <table class="table table-responsive-md" id="dynamic_field">
                            <tr>
                                <td><input type="text" class="form-control" name="languageName[]"
                                        placeholder="language Name" class="form-control name_list" required /></td>
                                <td>
                                    <div class="form-group">
                                        <select name="languageStatus[]" id="" class="form-control">
                                            <option value="Expert">Expert</option>
                                            <option value="Fluent">Fluent</option>
                                            <option value="Intermediate">Intermediate</option>
                                            <option value="Beginner">Beginner</option>
                                        </select>
                                    </div>
                                </td>
                                <td><button type="button" name="add" id="add" class="btn btn-primary">Add More</button>
                                </td>

                            </tr>
                        </table>
                    </div>

                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger light" data-dismiss="modal">Close</button>
                <button type="submit" name="submit" id="submit" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>