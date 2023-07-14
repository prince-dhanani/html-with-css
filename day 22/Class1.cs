using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace MVCConApp
{
    internal class Ex_1_Welcome
    {
        static void Main(string[] args)
        {
            Console.WriteLine("Enter Your Name ");
            string UserName = Console.ReadLine();
            Console.WriteLine("Enter Your Age ");
            int age = int.Parse(Console.ReadLine());
            Console.WriteLine("Hello " + UserName + ",How are You?" + " Age is " + age.ToString());
        }
    }
}
