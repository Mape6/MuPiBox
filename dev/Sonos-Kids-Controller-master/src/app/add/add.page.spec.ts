import { HttpClientTestingModule, HttpTestingController } from '@angular/common/http/testing'
import { ComponentFixture, TestBed } from '@angular/core/testing'

import { HttpClientModule } from '@angular/common/http'
import { FormsModule } from '@angular/forms'
import { RouterTestingModule } from '@angular/router/testing'
import { IonicModule } from '@ionic/angular'
import { AddPage } from './add.page'

describe('AddPage', () => {
  let component: AddPage
  let fixture: ComponentFixture<AddPage>
  let httpClient: HttpTestingController

  beforeEach(() => {
    TestBed.configureTestingModule({
      declarations: [AddPage],
      imports: [IonicModule.forRoot(), HttpClientModule, RouterTestingModule, FormsModule, HttpClientTestingModule],
    }).compileComponents()

    httpClient = TestBed.inject(HttpTestingController)

    fixture = TestBed.createComponent(AddPage)
    component = fixture.componentInstance
    fixture.detectChanges()
  })

  it('should create', () => {
    httpClient.expectOne('http://localhost:8200/api/sonos')
    expect(component).toBeTruthy()
  })
})
