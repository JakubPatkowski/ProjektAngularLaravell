import {Injectable, NgModule} from '@angular/core';
import {HttpClient, HttpHeaders, HttpParams} from "@angular/common/http";
import { map, catchError } from "rxjs/operators";
import {Observable, of, Subject, Subscription, throwError} from "rxjs";
import {InterestRates} from "../models/interest-rates.model";
import {AuthService} from "./auth.service";
import { CommonModule } from "@angular/common";
import {HouseValues} from "../models/house-values.model";
import { AllHouseValues} from "../models/all-house-values.model";


@Injectable({
  providedIn: 'root'
})


export class BackendService {
  API = 'http://127.0.0.1:8000/api'; // Ensure this is a complete URL

  interestRates: InterestRates [] = []
  houseValues: HouseValues [] = []
  houseValues2: HouseValues [] = []
  allHouseValues: AllHouseValues [] = []

  interestRatesChange = new Subject<InterestRates[]>()
  housePricesChange = new Subject<{object: HouseValues[], cityName: string}>()
  housePricesChange2 = new Subject<{object: HouseValues[], cityName: string}>()
  allHousePricesChange = new Subject<AllHouseValues[]>()

  citiesNumber: number = 1
  citiesNumberChange = new Subject<number>()

  dataChange = new Subject<{houseValues1: HouseValues[], houseValues2: HouseValues[], interestRates: InterestRates[], citiesNumber: number, cityName1: string, cityName2: string}>()

  check: boolean = false

  constructor(private http: HttpClient, private authService: AuthService) {}

  async loadData(city1: string, city2: string, marketType: string, offerType: string, startDate: string, endDate: string){
    console.log(city2)
    await this.getInterest()

    if(city2 == "Brak"){
      this.citiesNumber = 1
      console.log(await this.getHousesValues(true,city1,marketType,offerType,startDate,endDate))
      await this.getHousesValues(true,city1,marketType,offerType,startDate,endDate)
      this.dataChange.next({houseValues1: this.houseValues, houseValues2: this.houseValues2, interestRates: this.interestRates, citiesNumber: this.citiesNumber, cityName1: city1, cityName2: city2})

    }else{
      this.citiesNumber = 2
      await this.getHousesValues(true,city1,marketType,offerType,startDate,endDate)
      await this.getHousesValues(false,city2,marketType,offerType,startDate,endDate)
      this.dataChange.next({houseValues1: this.houseValues, houseValues2: this.houseValues2, interestRates: this.interestRates, citiesNumber: this.citiesNumber, cityName1: city1, cityName2: city2})

    }
    // console.log("Backend")
    // console.log(this.houseValues)
    // console.log(this.houseValues2)
    // this.houseValues.forEach((data)=>{
    //   console.log(data)
    // })
    //
    // this.dataChange.next({houseValues1: this.houseValues, houseValues2: this.houseValues2, interestRates: this.interestRates, citiesNumber: this.citiesNumber, cityName1: city1, cityName2: city2})
  }


  async getInterest(){
    this.interestRates = []
    return new Promise((resolve) => {
      return this.http.get<any>(`${this.API}/get_intrest_rates` ,{
        headers: new HttpHeaders({Authorization: "Bearer " + this.authService.getAccessToken()}
        )}
      ).subscribe((data) => {
        data.forEach((item: InterestRates) => {
          let interestRate = new InterestRates();

          interestRate.obowiazuje_od = item.obowiazuje_od;
          interestRate.oprocentowanie = item.oprocentowanie;

          this.interestRates.push(interestRate);
        });
        resolve(200)
      });
    })
  }

  // setCitiesNumber(number: number){
  //   this.citiesNumber = number
  //   this.citiesNumberChange.next(this.citiesNumber)
  // }

  async getHousesValues(target: boolean, city: string, marketType: string, offerType: string, startDate: string, endDate: string) {
    return new Promise((resolve)=>{
      if(target){
        this.houseValues = []
      }
      else {
        this.houseValues2 = []
      }
      let params = new HttpParams()
      params = params.append('city', city )
      params = params.append('table_name', marketType+"_"+offerType)
      params = params.append('start_date', startDate )
      params = params.append('end_date', endDate )
      return this.http.get<any>(`${this.API}/get_data_city_in_range`, {
          headers: new HttpHeaders({Authorization: "Bearer " + this.authService.getAccessToken()}),
          params: params
        }

      )
        .subscribe((data) => {
          data.forEach((item: HouseValues) => {
            let houseValue = new HouseValues();

            houseValue.quarter = item.quarter
            houseValue.price = item.price
            console.log("foreach")
            console.log(houseValue)

            if(target){
              this.houseValues.push(houseValue);

              // console.log(houseValue)


            } else {
              this.houseValues2.push(houseValue);
              // console.log(houseValue)
            }
          });
          resolve(200)
        });
    })


  }



  async getAllData(marketType: string, offerType: string, startDate: string, endDate: string) {
    // console.log("wywołanie getdata")
    this.allHouseValues = []
    let params = new HttpParams()
    params = params.append('table_name', marketType+"_"+offerType )
    params = params.append('start_date', startDate)
    params = params.append('end_date', endDate)
    // console.log(params)

    return this.http.get<any>(`${this.API}/get_data_in_range`, {
        headers: new HttpHeaders({Authorization: "Bearer " + this.authService.getAccessToken()}),
        params: params
      }
    )
      .subscribe((data) => {
        // console.log(data)
        data.forEach((item: AllHouseValues) => {
          let allHouseValue = new AllHouseValues();

          allHouseValue.quarter = item.quarter
          allHouseValue.prices = item.prices
          this.allHouseValues.push(allHouseValue);
        });
        this.allHousePricesChange.next(this.allHouseValues);
      });
  }


}
