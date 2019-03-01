


				  <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Serial No</label>
                    <div class="col-sm-8">
                      @foreach( $serial_nos as $serial_no )
                      <input type="number" class="form-control" name="serial_no" placeholder="Serial No" value="{{ $serial_no->SL_NO + 1 }}">
                      @endforeach
              
                      @if($serial_nos->isEmpty())
                      <input type="number" class="form-control" name="serial_no" placeholder="Serial No" value="1">
                      @endif

                      @if ($errors->has('serial_no'))
                          <span class="error_msg">
                            {{ $errors->first('serial_no') }}
                          </span>
                      @endif
                    </div>
                  </div>