import { Component } from '@angular/core';
import {FormControl, FormGroup, ReactiveFormsModule, Validators} from "@angular/forms";
import {HttpClient} from "@angular/common/http";
import {Observable} from "rxjs";
import {map} from "rxjs/operators";
import {BackendService} from "../services/backend.service";
import {AuthService} from "../services/auth.service";

@Component({
  selector: 'app-login',
  standalone: true,
  imports: [ReactiveFormsModule],
  templateUrl: './login.component.html',
  styleUrl: './login.component.scss'
})
export class LoginComponent {

  constructor(private authService: AuthService) {}

  // Ensure this is a complete URL

  loginForm = new FormGroup({
    'email' : new FormControl('', [Validators.required, Validators.email]),
    'password' : new FormControl('', [Validators.required])
  })

  onSubmit(){
    const email = this.loginForm.value.email ? this.loginForm.value.email : '';
    const password =this.loginForm.value.password ? this.loginForm.value.password : '';
    this.authService.login(email, password).subscribe(
      (data)  => {
        console.log("zalogowano")
      }
    )
  }
}
