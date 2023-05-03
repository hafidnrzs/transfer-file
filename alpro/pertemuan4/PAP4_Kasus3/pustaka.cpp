#include "header.h"

void guessNumber(){
	int guess = 1;
	int lives = 3;
	int predict;
	bool isGuessing = true;

	do{
		if(lives > 0){
			cout << "Input your predict number: "; cin >> predict;
			if(predict == guess){
				cout << "Amazing, you're too smart." << endl;
				cout << "The number is " << guess << endl;
				isGuessing = false;
			} else if(predict > guess){
				cout << "Number is too big" << endl;
			} else if(predict < guess){
				cout << "Number is too small"<< endl;
			}
			lives--;
			cout << "Your chance still remaining: " << lives << endl;
		} else {
			cout << "Sorry, Try Your Luck Next Time" << endl;
			isGuessing = false;
		}
		
	}while(isGuessing);
}