using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace MVCConApp
{
    class sample
    {
        string UserName;
        int age=0;
        public void setdata()
        {
            Console.WriteLine("Enter Your Name ");
            UserName = Console.ReadLine();
            Console.WriteLine("Enter Your Age ");
            age = int.Parse(Console.ReadLine());
        }
        public void getData()
        {
            Console.WriteLine("Hello " + UserName + ", How are You?" + " Age is " + age.ToString());
        }
    }
     internal class Ex_3_oops
    {
        static void Main(String[] args)
        {
            sample s1 = new sample();
            s1.setdata();
            s1.getData();
        }
    }
}
