import { NgModule, Component } from '@angular/core';
import { BrowserModule } from '@angular/platform-browser';
import { platformBrowserDynamic } from '@angular/platform-browser-dynamic';


class AppComponent {
  heading = "Ultra Racing Schedule"
}

@NgModule({
  imports: [ BrowserModule ],
  declarations: [  ],
  
})
class AppModule {}

platformBrowserDynamic()
.bootstrapModule(AppModule);
