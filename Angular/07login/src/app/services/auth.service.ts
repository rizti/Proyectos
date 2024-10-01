import { HttpClient } from '@angular/common/http';
import { Injectable } from '@angular/core';
import { UsuarioModel } from '../models/usuario.model';
import{map} from 'rxjs/operators';

@Injectable({
  providedIn: 'root'
})
export class AuthService {

  private urlReg = 'https://www.googleapis.com/identitytoolkit/v3/relyingparty/signupNewUser'; 
  private apikey='AIzaSyC7WeJtnsr7hl4MrR3gu2OmoOn51HTiIwE';

  userToken:string;


  constructor(private http:HttpClient) {
    this.leerToken();
   }

  logout(){
    
  }

  login(usuario:UsuarioModel){

    const authData={
      email:usuario.email,
      password:usuario.password,
      returnSecureToken:true
    };

    return this.http.post(`/api/identitytoolkit/v3/relyingparty/verifyPassword?key=${this.apikey}`, authData).pipe(
      map(resp=>{
        this.guardarToken(resp['idToken']);
        return resp;
      })
    );

  }

  registrarse(usuario:UsuarioModel){
    
    const authData={
      email:usuario.email,
      password:usuario.password,
      returnSecureToken:true
    };

    //return this.http.post(`${this.urlReg}/signupNewUser?key=${this.apikey}`,authData);
    return this.http.post(`/api/identitytoolkit/v3/relyingparty/signupNewUser?key=${this.apikey}`, authData).pipe(
      map(resp=>{
        this.guardarToken(resp['idToken']);
        return resp;
      })
    );

  }

  private guardarToken(idToken:string){
    this.userToken=idToken;
    localStorage.setItem('token',idToken);
  }

  leerToken(){
    if(localStorage.getItem('token')){
      this.userToken=localStorage.getItem('token');
    }else{
      this.userToken='';
    }

    return this.userToken;

  }

}
