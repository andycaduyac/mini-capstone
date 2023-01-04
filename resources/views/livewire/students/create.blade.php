<div>
    <!-- Modal -->
    <div wire:ignore.self class="modal fade" id="addModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Add New Student</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form wire:submit.prevent="submit">
                    <div class="modal-body">
                        <div>
                            <label for="">Name</label>
                            <input class="form-control text-dark" type="text" wire:model.defer="name" required>
                        </div>
                        <div>
                            <label for="">Address</label>
                            <input class="form-control text-dark" type="text" wire:model.defer="address" required>
                        </div>
                        <div>
                            <label for="">Course</label>
                            <select name="course" wire:model.defer="course" class="form-control text-dark">
                                <option hidden="true"> Select Course </option>
                                <option selected disabled>Select Course</option>
                                <option value="BS-Information Technology">BS-Information Technology</option>
                                <option value="BS-Education">BS-Education</option>
                                <option value="BS-Criminology">BS-Criminology</option>
                                <option value="BS-Nursing">BS-Nursing</option>
                            </select>
                        </div>
                        <div>
                            <label for="">Year</label>
                            <select name="year" wire:model.defer="year" class="form-control text-dark">
                                <option hidden="true"> Select Year </option>
                                <option selected disabled>Select Year</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                            </select>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Add</button>
                    </div>
                </form>

            </div>
        </div>
    </div>

</div>

