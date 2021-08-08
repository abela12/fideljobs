<!--Add Social Media Modal -->
<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add Language </h5>
                <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <form name="add-language" id="add-language">

                    <div class="table-responsive">
                        <table class="table table-responsive-md" id="dynamic_field">
                            <tr>
                                <div class="form-group">
                                    <td><input type="text" class="form-control" name="languageName[]"
                                            placeholder="language Name" class="form-control name_list" required /></td>
                                </div>
                                <div class="form-group">
                                    <td>

                                        <select name="languageStatus[]" id="" class="form-control">
                                            <option value="Expert">Expert</option>
                                            <option value="Fluent">Fluent</option>
                                            <option value="Intermediate">Intermediate</option>
                                            <option value="Beginner">Beginner</option>
                                        </select>

                                    </td>
                                </div>
                                <div class="form-group">
                                    <td>

                                        <button type="button" name="addLanguage" id="addLanguage"
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
                <button type="submit" name="submit" id="submit" class="btn btn-primary btn-sm">Save changes</button>
            </div>
        </div>
    </div>
</div>