#include <iostream>
#include <string>
using namespace std;

int main() {
    int total_participants = 121;
    string category_code = "01W";
    char education_level = 'A';
    string year = "24";
    string participant_number = to_string(total_participants) + "-1-" + category_code + "-" + education_level + "-" + year;
    cout << "Nomor peserta Eko adalah " << participant_number << ".";
    return 0;
}
