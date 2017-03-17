            <div class="row">
                <div class="col-lg-12">
                    <!-- Form Elements -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Add a new category
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form action="<?php echo base_url(); ?>super_admin/save_category" enctype="multipart/form-data" method="post" role="form">
                                        <div class="form-group">
                                            <label>Category Name</label>
                                            <input name="categategory_name" type="text" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Category Description</label>
                                            <textarea name="category_description" class="form-control" rows="3" placeholder="Enter text"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>Category Status</label>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="category_status" id="optionsRadios1" value="1" checked>Published
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="category_status" id="optionsRadios2" value="0">Unpublished
                                                </label>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-primary">Submit Button</button>
                                        <button type="reset" class="btn btn-danger">Reset Button</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                     <!-- End Form Elements -->
                </div>
            </div>
        