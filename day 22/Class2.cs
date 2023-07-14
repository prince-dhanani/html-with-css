using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace MVCConApp
{
    internal class Ex_2_Operators
    {
        static void Main(string[] args)
        {
            Console.WriteLine("Enter Num 1 ");
            float n1 = float.Parse(Console.ReadLine());
            Console.WriteLine("Enter Num 2 ");
            float n2 = float.Parse(Console.ReadLine());
            Console.WriteLine("Menu: 1. Add   2. Sub   3. Mul   4. Div");
            Console.WriteLine("Enter Your Choice");
            int c = int.Parse(Console.ReadLine());
            switch (c)
            {
                case 1:
                    Console.WriteLine("Ans add is" + (n1 + n2));
                    break;
                case 2:
                    Console.WriteLine("Ans sub is" + (n1 - n2));
                    break;
                case 3:
                    Console.WriteLine("Ans mul  is" + (n1 * n2));
                    break;
                case 4:
                    Console.WriteLine("Ans mul is" + (n1 / n2).ToString());
                    break;
                Default: Console.WriteLine("Wrong Choice:::");

            }
        }
    }
}
