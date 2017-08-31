@extends('layouts.app')
@section('content')
					<div class="contenido">
						<div class="con-bg-1">
							<div class="pro-options">
								<span><label>Owner:</label>
									<select name="cars">
									  <option value="uno">Bolita de pan</option>
										<option value="uno" selected>churro con cajeta</option>
									</select>
								</span><br>
								<span><label>Client:</label>
									<select name="cars">
										<option value="uno" selected>Pariente Kun</option>
										<option value="uno">churro con cajeta</option>
									</select>
								</span><br>
								<span><label>Project:</label>
									<select name="cars">
										<option value="uno" selected>projectos</option>
										<option value="uno">churro con cajeta</option>
									</select>
								</span><br>
								<span><label>Task:</label>
									<select name="cars">
										<option value="uno" selected>Save the world</option>
										<option value="uno">churro con cajeta</option>
									</select>
								</span>
							</div>
							<div class="pro-options-2">
								<span>
									<label>Time:</label><input type="text" name="" value="">
									<label>(Decimal Hours)</label><input type="text" name="" value="">:<input type="text" name="" value=""><label>(HH:MM)Total: 0.00</label>
									<br>
									<label style="position:relative;top:-134px;">Description:</label><textarea name="name"></textarea>
								</span><br>
								<button class="start" type="button" name="button">Save New & Start Timer</button>
							</div>
						</div>
						<div class="con-bg-2">
							<table class="table latabla">
							  <thead class="thead-inverse">
							    <tr class="primera ln">
							      <th class="c_text">Timer</th>
							      <th class="c_text">Edit</th>
							      <th class="c_text">Delete</th>
							      <th>Client</th>
										<th>Project</th>
										<th>Task</th>
										<th>Time</th>
										<th>Description</th>
										<th>></th>
							    </tr>
							  </thead>
							  <tbody>
							    <tr>
							      <th class="c_text" scope="row"><i class="fa fa-clock-o fa-lg"></i></th>
							      <td class="c_text"><i class="fa fa-pencil fa-lg"></td>
							      <td class="c_text"><i class="fa fa-trash-o fa-lg"></td>
							      <td>Creative Design</td>
										<td>0007-Non Billable</td>
										<td>Human Resources</td>
										<td>4.00</td>
										<td>Discuss concepts and photo search</td>
										<td>27/08/2017</td>
							    </tr>
									<tr>
										<th class="c_text" scope="row"><i class="fa fa-clock-o fa-lg"></i></th>
										<td class="c_text"><i class="fa fa-pencil fa-lg"></td>
										<td class="c_text"><i class="fa fa-trash-o fa-lg"></td>
										<td>MuuMuu Dairy</td>
										<td>0009-Unknow</td>
										<td>Concept Development</td>
										<td>2.00</td>
										<td>Photo search for summer and fall guide</td>
										<td>28/08/2017</td>
									</tr>
									<tr>
										<th class="c_text" scope="row"><i class="fa fa-clock-o fa-lg"></i></th>
										<td class="c_text"><i class="fa fa-pencil fa-lg"></td>
										<td class="c_text"><i class="fa fa-trash-o fa-lg"></td>
										<td>Acme Corporation</td>
										<td>0003-Website Redesign</td>
										<td>Design</td>
										<td>1.50</td>
										<td>Redesigning website</td>
										<td>29/08/2017</td>
									</tr>
							  </tbody>
							</table>
						</div>
					</div>
@endsection
